<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaKeywords extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'keywords', 'meta_description'];
}
