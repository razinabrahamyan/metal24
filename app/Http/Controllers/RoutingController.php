<?php


namespace App\Http\Controllers;

use App\Library\Services\Contracts\RoutingContract;
use App\Models\Product;

class RoutingController extends Controller
{
    protected $routingService;

    public function __construct(RoutingContract $routingService)
    {
        $this->routingService = $routingService;
    }

    public function index()
    {
        return view("pages.welcome", $this->routingService->index());
    }

    public function content()
    {
        return view("pages.content", $this->routingService->content());
    }
    public function test(){
        $model = Product::with(['metalPrice', 'category', 'market']);
        $marketPrices = $model->get()->groupBy('market_id');
        $marketPricesByCategory = $model->get();
        $cher_id = 10; //Do not change!
        $chermet = $marketPricesByCategory->groupBy('category_id')[$cher_id];
        $marketPricesByCategory = $marketPricesByCategory->groupBy('category_id')->forget($cher_id)->prepend($chermet, $cher_id);

        return view('test')->with([
            'model' => $model,
            'marketPrices' => $marketPrices,
            'marketPricesByCategory' => $marketPricesByCategory,
            'cher_id' => $cher_id,
            'chermet' => $chermet,
        ]);
    }

    public function page()
    {
        return view("pages.".request()->route()->getName(), $this->routingService->page());
    }
}
