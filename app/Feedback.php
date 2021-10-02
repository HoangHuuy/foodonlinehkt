<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $fillable = [
        'id_user',
        'id_product',
        'mo_ta',
        'status',
    ];

}
