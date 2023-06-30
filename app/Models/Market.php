<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Market extends Model
{
    use HasFactory;

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class)->with('slug');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class)->with('slug');
    }

    public function slug(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Slug::class, 'slugable');
    }
}
