<?php

namespace App\Http\Controllers\Api;

use App\Dog;
use App\Http\Controllers\Controller;
use App\Http\Resources\DogResource;
use Illuminate\Http\Request;

class DogController extends Controller
{
	public function index()
	{
		$dogs = Dog::all();

		return DogResource::collection($dogs);
	}

	public function show(Dog $id)
	{
		return new DogResource($id);
	}

	public function find(Request $request)
	{
		$query = Dog::query();

		if ($request->has('id')) {
			$query = $query->where('id', $request->id);
		}

		if ($request->has('name')) {
			$query = $query->where('name', 'like', "%{$request->name}%");
		}

		if ($request->has('breed')) {
			$query = $query->where('breed', $request->breed);
		}

		if ($request->has('owner')) {
			$query = $query->where('owner', $request->owner);
		}

		if ($request->has('age')) {
			$query = $query->where('age', $request->age);
		}

		if ($request->has('size')) {
			$query = $query->where('size', $request->size);
		}

		if ($request->has('weight')) {
			$query = $query->where('weight', $request->weight);
		}

		if ($request->has('orderBy')) {
			if ($request->has('orderDirection')) {
				switch ($request->orderDirection) {
					case 'asc':
						$query = $query->orderBy($request->orderBy, 'asc');
						break;

					case 'desc':
						$query = $query->orderBy($request->orderBy, 'desc');
						break;

					default:
						$query = $query->orderBy($request->orderBy);
				}
			} else {
				$query = $query->orderBy($request->orderBy);
			}
		}

		$query = $query->get();

		return DogResource::collection($query);
	}
}
