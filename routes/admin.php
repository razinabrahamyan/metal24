<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\KeyWordsController;
use App\Http\Controllers\Admin\MarqueeController;
use App\Http\Controllers\Admin\MetalPriceController;
use App\Http\Controllers\Admin\MobilePhoneController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\ScrapPriceController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', LoginController::class)->name('admin.login');

Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'auth:admin', 'prefix' => 'dashboard'], function () {

    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix' => 'pages'], function () {

        Route::get('/', [PagesController::class, 'index'])->name('page.index');
        Route::get('/edit/{id}', [PagesController::class, 'edit'])->name('page.edit');
        Route::post('/update/{id}', [PagesController::class, 'update'])->name('page.update');
    });

    Route::group(['prefix' => 'prices'], function () {

        Route::get('/metal-price', [MetalPriceController::class, 'index'])->name('metal.price.index');
        Route::post('/metal-price/update/{id}', [MetalPriceController::class, 'update'])
            ->name('metal.price.update');

        Route::get('/scrap-price', [ScrapPriceController::class, 'index'])->name('scrap.price.index');
        Route::post('/scrap-price/update/{id}', [ScrapPriceController::class, 'update'])
            ->name('scrap.price.update');

        Route::get('/marquee', [MarqueeController::class, 'index'])->name('marquee.price');
        Route::post('/marquee/update/{id}', [MarqueeController::class, 'update'])->name('marquee.price.update');

    });

    Route::get('/keywords', [KeyWordsController::class, 'index'])->name('meta.keywords');
    Route::post('/keywords/update/{id}', [KeyWordsController::class, 'update'])->name('meta.keywords.update');

    Route::get('/mobile-phone', [MobilePhoneController::class, 'index'])->name('mobile_phone');
    Route::post('/mobile-phone-show', [MobilePhoneController::class, 'update']);

});
