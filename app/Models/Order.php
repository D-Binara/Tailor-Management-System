<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'order_type',
        'height',
        'width',
        'color',
        'order_date',
        'delivery_date',
        'status',
        'price',
        'quantity',
    ];
}
