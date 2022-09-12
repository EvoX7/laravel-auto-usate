<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $carsTable) {
            $carsTable->id();
            $carsTable->string('brand', 30);
            $carsTable->string('car_name', 30);
            $carsTable->string('trasmission', 50);
            $carsTable->integer('mileage');
            $carsTable->string('color');
            $carsTable->smallInteger('price');
            $carsTable->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}