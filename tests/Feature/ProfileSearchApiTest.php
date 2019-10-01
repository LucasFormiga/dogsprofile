<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfileApiTest extends TestCase
{
	/** @test */
	public function search_by_id_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?id=1';
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
	public function search_by_name_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?name=Eduardo';
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
	public function search_by_breed_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?breed=1';
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
	public function search_by_owner_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?owner=1';
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
	public function search_by_age_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?age=1';
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
	public function search_by_size_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?size=1';
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
	public function search_by_weight_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?weight=1';
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
	public function search_using_order_by_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?orderBy=id';
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
	public function search_using_order_by_and_order_direction_on_dogs_profiles()
	{
		/**
		 * First we should define some variables,
		 * like the route we want to test and the
		 * status code the response should return.
		 */
		$route = route('api.profiles.search') . '?orderBy=id&orderDirection=asc';
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
}
