<?php

namespace App\Library\Admin\Services;

use App\Library\Admin\Contracts\AdminMetalPriceContract;
use App\Models\MetalPrice;
use App\Models\Product;
use App\Models\ScrapPrice;

class AdminMetalPriceService implements AdminMetalPriceContract
{

    public function index(): array
    {
        $scrap = ScrapPrice::pluck('product_id')->toArray();
        $prices = Product::query()
            ->whereNotIn('id', $scrap)
            ->with('metalPrice', 'category.market', 'market')
            ->get();

        return ['products' => $prices];
    }

    public function update($id, $data)
    {
        $wholesale  = "by_wholesale";
        $above      = "price_above_from_to";
        $below      = "price_below";
        $from       = "price_from_to";
        $weight     = "weight";

        $product = Product::query()->findOrFail($id);
        $product->metalPrice()->update([

            $wholesale => $data->$wholesale ?? null,
            $above     => $data->$above ?? null,
            $below     => $data->$below ?? null,
            $from      => $data->$from ?? null,
            $weight    => $data->$weight ?? null

        ]);
        return $product;
    }
}
