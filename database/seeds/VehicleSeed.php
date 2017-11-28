<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Vehicle;

use Faker\Factory as Faker;

class VehicleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for($i = 0; $i < 6; $i++){
            Vehicle::create([
                'color' => $faker->safeColorName(),
                'power' => $faker->randomNumber(),
                'capacity' => $faker->numberBetween(1,99999),
                'speed' => $faker->numberBetween(1,99999),
                'maker_id' => $faker->numberBetween(1,5)
            ]);
        }
    }
}
