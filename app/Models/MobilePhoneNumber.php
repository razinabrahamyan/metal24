<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilePhoneNumber extends Model
{
    use HasFactory;

    protected $fillable = ['status'];
    public $timestamps = false;
}
