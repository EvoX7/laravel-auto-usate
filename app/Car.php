<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand',
        'car_name',
        'trasmission',
        'mileage',
        'color',
        'price',
    ];

    public function optionals(){
        return $this->belongsToMany('App\Optional');
    }
}
