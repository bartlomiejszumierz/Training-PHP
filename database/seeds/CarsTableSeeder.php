<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0;$i<100;$i++) {

            $car = new \App\Cars();
            $car->name = $faker->text(100);
            $car->engine = 1;
            $car->save();
        }
    }
}