<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;
    // Coffee.php
public function orders()
{
    return $this->hasMany(Order::class);
}
protected $fillable = [
    'name',
    'description',
    'price',
    'user_id'
];

}
