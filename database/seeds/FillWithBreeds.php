<?php

use App\Breed;
use Illuminate\Database\Seeder;

class FillWithBreeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Breed::updateOrCreate([
			'id' => 1
		], [
			'name' => 'Lhasa Apso',
			'description' => 'A really cool breed.',
			'hobbies' => 'To play all the time'
		]);

		Breed::updateOrCreate([
			'id' => 2
		], [
			'name' => 'Poodle',
			'description' => 'A cool breed.',
			'hobbies' => 'To play all the time'
		]);

		Breed::updateOrCreate([
			'id' => 3
		], [
			'name' => 'Shitzu',
			'description' => 'A cool breed.',
			'hobbies' => 'To play all the time'
		]);

		Breed::updateOrCreate([
			'id' => 4
		], [
			'name' => 'German Shepherd',
			'description' => 'A cool breed.',
			'hobbies' => 'To play all the time'
		]);

		Breed::updateOrCreate([
			'id' => 5
		], [
			'name' => 'Yorkshire',
			'description' => 'A cool breed.',
			'hobbies' => 'To play all the time'
		]);

		Breed::updateOrCreate([
			'id' => 6
		], [
			'name' => 'Schnauzer',
			'description' => 'A cool breed.',
			'hobbies' => 'To play all the time'
		]);

		Breed::updateOrCreate([
			'id' => 7
		], [
			'name' => 'Golden Retriever',
			'description' => 'A cool breed.',
			'hobbies' => 'To play all the time'
		]);
    }
}
