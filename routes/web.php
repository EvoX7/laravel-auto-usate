<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', "CarsController@index");
=======
Route::get('/', function () {
    return view('layout/home');
});
>>>>>>> ff37825e9ac9b4b1a597847deb292ead026f162a
