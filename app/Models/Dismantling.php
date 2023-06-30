<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Dismantling extends Model
{
    use HasFactory;

    protected $fillable = ["title", "slug"];

    public function slug() : MorphOne
    {
        return $this->morphOne(Slug::class, 'slugable');
    }
}
