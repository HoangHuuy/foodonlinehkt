<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id_product',
        'user_username',
        'quantity',
        'order_code',
    ];
}
