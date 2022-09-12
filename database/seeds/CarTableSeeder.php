<?php

use App\Car;
use Illuminate\Database\Seeder;

// $carsTable->id();
// $carsTable->string('brand', 30);
// $carsTable->string('car_name', 30);
// $carsTable->string('trasmission', 20);
// $carsTable->decimal('mileage', 5, 3);
// $carsTable->string('color');
// $carsTable->decimal('price', 7, 3);
// $carsTable->timestamps();

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'brand' => 'toyota',
                'car_name' => 'rav 4',
                'trasmission' => 'manuale',
                'mileage' => 60.000,
                'color' => 'blu',
                'price' => 6.000
            ]
        ];
        foreach ($cars as $car) {
            $newCar = new Car();
            $newCar->brand = $car['brand'];
            $newCar->car_name = $car['car_name'];
            $newCar->trasmission = $car['trasmission'];
            $newCar->mileage = $car['mileage'];
            $newCar->color = $car['color'];
            $newCar->price = $car['price'];
            $newCar->save();
        }
    }
}
