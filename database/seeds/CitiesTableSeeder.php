<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
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

            $cities = new \App\Cities();
            $cities->Cities = $faker->city;
            $cities->save();

        }
    }
}
