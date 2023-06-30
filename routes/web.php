<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\SiteMapController;
use App\Models\Page;
use App\Models\Slug;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RoutingController::class, 'index'])->name('welcome');

foreach (Slug::query()->whereNotNull('content_id')->get() as $slug) {
    Route::get("/$slug->slug", [RoutingController::class, 'content'])->name($slug->slug);
}

foreach (Page::all() as $slug) {
    Route::get("/$slug->slug", [RoutingController::class, 'page'])->name($slug->slug);
}

Auth::routes();

Route::get('/test', [RoutingController::class, 'test']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//------------------------------- About Us ----------------------------------------------------
Route::get('/novosti', [NewsController::class, 'index'])->name('news');
foreach (Slug::query()->where('slugable_type', 'App\Models\News')->get() as $slug) {
    Route::get("/$slug->slug", [NewsController::class, 'show'])->name($slug->slug);
}
Route::get('/vakansii', AboutUsController::class)->name('vakansii');
Route::get('/sotrudnichestvo', AboutUsController::class)->name('sotrudnichestvo');
Route::get('/nashi-rabotyi', AboutUsController::class)->name('nashi.raboti');
//------------------------------ End About Us -------------------------------------------------

Route::get('/karta-sayta', SiteMapController::class)->name('site.map');

/*Route for testing*/
Route::get('/mytest/{action}', function ($action, Request $request) {
    $class = "App\\Http\\Controllers\\Mytest\\TestController";
    if (class_exists($class) && method_exists($class, $action)) {
        return (new $class())->callAction($action, [$request]);
    } else
        return response('Экшена '.$action.' не существует');
});
/*Route for testing*/
