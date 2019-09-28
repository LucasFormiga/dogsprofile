<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    /** @test */
    public function to_open_the_home_index()
    {
        $response = $this->get('/api');

        $response->assertStatus(200);
	}

	/** @test */
	public function get_all_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.all');
		$code = 200;

		/**
		 * After define all the variables needed
		 * to execute the test. We should make a
		 * request and wait for an response.
		 *
		 * When a response is catched, we will
		 * decode to an array so we will be able to
		 * check the data structure.
		 */
		$response = $this->get($route);
		$content = json_decode($response->getContent(), true);

		/**
		 * Here is where the party gets started,
		 * we can check all the details from response
		 * and data structures.
		 */
		$response->assertStatus($code);
		$response->assertJsonStructure();

		foreach ($content['data'] as $items) {
			$this->assertArrayHasKey('id', $items);
			$this->assertArrayHasKey('name', $items);
			$this->assertArrayHasKey('breed_id', $items);
			$this->assertArrayHasKey('breed', $items);
			$this->assertArrayHasKey('age', $items);
			$this->assertArrayHasKey('size', $items);
			$this->assertArrayHasKey('weight', $items);
			$this->assertArrayHasKey('owner', $items);
		}
	}

	/** @test */
	public function get_a_dog_profile()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profile', 1);
		$code = 200;

		/**
		 * After define all the variables needed
		 * to execute the test. We should make a
		 * request and wait for an response.
		 *
		 * When a response is catched, we will
		 * decode to an array so we will be able to
		 * check the data structure.
		 */
		$response = $this->get($route);
		$content = json_decode($response->getContent(), true);

		/**
		 * Here is where the party gets started,
		 * we can check all the details from response
		 * and data structures.
		 */
		$response->assertStatus($code);
		$response->assertJsonStructure();

		$this->assertArrayHasKey('id', $content['data']);
		$this->assertArrayHasKey('name', $content['data']);
		$this->assertArrayHasKey('breed_id', $content['data']);
		$this->assertArrayHasKey('breed', $content['data']);
		$this->assertArrayHasKey('age', $content['data']);
		$this->assertArrayHasKey('size', $content['data']);
		$this->assertArrayHasKey('weight', $content['data']);
		$this->assertArrayHasKey('owner', $content['data']);
	}
}
