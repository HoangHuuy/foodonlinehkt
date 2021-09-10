<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'doB',
        'emails',
        'sđt',
        'gender',
        'fullname',
        'address',
    ];
}
