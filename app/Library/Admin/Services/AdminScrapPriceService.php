<?php

namespace App\Library\Admin\Services;

use App\Library\Admin\Contracts\AdminScrapPriceContract;
use App\Models\Product;
use App\Models\ScrapPrice;

class AdminScrapPriceService implements AdminScrapPriceContract
{

    public function index()
    {
        $scrap = ScrapPrice::pluck('product_id')->toArray();
        $products = Product::query()
            ->whereIn('id', $scrap)
            ->with('category.market', 'market', 'scrapPrice')
            ->get();

//        dd($products);
        return ['products' => $products];
    }

    public function update($id, $data)
    {
        $blockage   = "standard_blockage";
        $basic      = "basic_price";
        $from       = "price_from_to";
        $above      = "price_above";
        $wholesale  = "by_wholesale";

        $product = Product::query()->findOrFail($id);
        $product->scrapPrice()->update([

            $blockage   => $data->$blockage  ?? null,
            $basic      => $data->$basic     ?? null,
            $from       => $data->$from      ?? null,
            $above      => $data->$above     ?? null,
            $wholesale  => $data->$wholesale ?? null,

        ]);
        return $product;
    }
}
