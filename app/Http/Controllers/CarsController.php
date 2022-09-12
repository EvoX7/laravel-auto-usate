<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('main', compact('cars'));
    }
}
