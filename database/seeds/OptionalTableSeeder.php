<?php

use App\Optional;
use Illuminate\Database\Seeder;

class OptionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionalsNames = ['abs', 'airbag', 'carbon', 'car-play', 'air-conditioning'];

        foreach ($optionalsNames as $optional) {
            $newOptional = new Optional();
            $newOptional->name = $optional;
            $newOptional->save();
        }
    }
}