<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Slug extends Model
{
    use HasFactory;

    public function slugable()
    {
        return $this->morphTo();
    }

    public function content() : HasOne
    {
        return $this->hasOne(Content::class, 'id', 'content_id');
    }
}
