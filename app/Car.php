<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'car_name',
        'trasmission',
        'mileage',
        'color',
        'price',
    ];
}
