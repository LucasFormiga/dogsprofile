<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $fillable = [
		'name',
		'breed',
		'age',
		'size',
		'weight',
		'owner'
	];

	public function breeds()
	{
		return $this->belongsTo('App\Breed', 'breed', 'id');
	}
}
