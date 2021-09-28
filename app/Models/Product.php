<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Product extends Model
{
    protected $fillable = [
        'username',
        'title',
        'type',
        'price',
        'image_product',
    ];
}
