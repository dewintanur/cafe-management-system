<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // Order.php
public function coffee()
{
    return $this->belongsTo(Coffee::class);
}
protected $fillable = [
    'order_number',
    'customer_name',
    'coffee_id',
    'quantity'
];

}
