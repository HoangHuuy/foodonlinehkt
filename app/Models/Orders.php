<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Orders extends Model
{
    protected $fillable = [
        'buyer_id',
        'seller_id',
        'id_product',
        'status',
        'qty',
        'order_code',
        'buyer_name',
        'phoneNumber',
        'address',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i:s');
    }
}
