<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'quantity',
        'discout',
        'sale_amount',
        'status',
    ];
}
