<?php

namespace App\Http\Controllers\Api;

use App\Dog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
	public function index()
	{
		return "Hello, world!";
	}

	public function all()
	{
		$params = [
			'id',
			'name',
			'breed',
			'age',
			'size',
			'weight',
			'owner'
		];

		$dogs = Dog::all();

		return $dogs->toJson();
	}
}
