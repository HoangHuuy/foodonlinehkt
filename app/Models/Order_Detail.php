<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $fillable = [
        'order_code',
        'id_product',
        'qty',
        'status',
    ];
}
