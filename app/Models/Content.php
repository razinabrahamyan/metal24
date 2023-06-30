<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        "form_1",
        "text_1",
        "form_2",
        "faq",
        "text_2",
        "remark",
        "form_3",
        "form_image",
    ];

    protected $casts = [
        "faq"    => Json::class,
        "remark" => Json::class,
    ];
}
