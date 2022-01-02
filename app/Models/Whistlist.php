<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Whistlist extends Model
{
    protected $fillable = [
        'id_user',
        'id_product',
    ];
}
