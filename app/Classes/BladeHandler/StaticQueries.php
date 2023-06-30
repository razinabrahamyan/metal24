<?php

namespace App\Classes\BladeHandler;

use App\Models\MarqueePrice;

class StaticQueries
{
    /**
     * @return mixed
     */
    public static function actualPrices()
    {
        $ids = [3, 4, 1, 12, 7, 6, 17, 18, 14, 15, 16];
        return MarqueePrice::whereIn('id', $ids)->get()->sortBy(function ($model) use ($ids) {
            return array_search($model->getKey(), $ids);
        });
    }
}
