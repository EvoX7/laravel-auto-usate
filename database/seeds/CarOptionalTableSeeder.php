<?php

use App\Car;
use App\Optional;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CarOptionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $cars = Car::all();
        $optional = Optional::all();

        foreach ($cars as $car) {
            $randOptionals = $faker->randomElements($optional, 2, false);

            foreach ($randOptionals as $randOptional) {
                $car->optionals()->attach($randOptional->id);
            }
        }
    }
}
