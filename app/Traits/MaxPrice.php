<?php
namespace App\Traits;

use App\Models\Product;

trait MaxPrice
{
    public static function getMarketMaxPrice($market){
        $marketMaxPrice = collect();
        $market->map(function ($item) use ($marketMaxPrice) {
            return $marketMaxPrice->push($item->pluck('metalPrice.price_above_from_to')->max());
        });
        return $marketMaxPrice->max();
    }

    public static function getCategoryMaxPrice($category){
        return $category->pluck('metalPrice.price_above_from_to')->max();
    }


    public static function getBlackMetalMaxPrice(){
        return Product::with(['metalPrice', 'category', 'market'])
                      ->where('market_id', 2)
                      ->get()->pluck('metalPrice.price_above_from_to')->max();
    }
}
