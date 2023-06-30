<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Product extends Model
{
    use HasFactory;

    public function scrapType(): HasOne
    {
        return $this->hasOne(ScrapType::class);
    }

    public function scrapPrice(): HasOne
    {
        return $this->hasOne(ScrapPrice::class);
    }

    public function metalPrice(): HasOne
    {
        return $this->hasOne(MetalPrice::class);
    }

    public function market(): BelongsTo
    {
        return $this->belongsTo(Market::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function slug(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Slug::class, 'slugable');
    }

//    public static function checkPriceType($id): HasOne
//    {
//        if ($id) {
//            return (new Product)->scrapPrice();
//        } else {
//            return (new Product)->metalPrice();
//        }
//
//    }
}
