<?php

namespace App\Http\Controllers\Api;

use App\Dog;
use App\Http\Controllers\Controller;
use App\Http\Resources\DogResource;

class ApiController extends Controller
{
	public function index()
	{
		return "Hello, world!";
	}

	public function all()
	{
		$dogs = Dog::all();

		return DogResource::collection($dogs);
	}

	public function profile($id)
	{
		$dog = Dog::find($id);

		return new DogResource($dog);
	}
}
