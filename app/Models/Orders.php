<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'buyer_id',
        'order_code',
        'buyer_name',
        'phoneNumber',
        'address',
        'totalPrice',
        'status',
    ];
}
