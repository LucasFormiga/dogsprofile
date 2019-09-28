<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class FillWithDogs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();

		foreach(range(1, 15) as $index) {
			DB::table('dogs')->insert([
				'name' => $faker->firstName,
				'breed' => rand(1, 7),
				'age' => rand(0, 15),
				'size' => rand(1, 7),
				'weight' => rand(1, 75),
				'owner' => 1
			]);
		}
    }
}
