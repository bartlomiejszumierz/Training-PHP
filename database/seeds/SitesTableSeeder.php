<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
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

            $site = new \App\Sites();
            $site->title = $faker->city;
            $site->content = $faker->text(200);
            $site->category_id = rand(1,9);
            $site->save();
        }
    }
}
