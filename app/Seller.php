<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Seller extends Model
{
    protected $fillable = [
        'username',
        'shopName',
        'phoneNumber',
        'address',
    ];

}
