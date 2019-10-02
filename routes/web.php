<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Api')->prefix('api')->group(function () {
	Route::get('', 'HomeController@index')->name('api.index');

	Route::prefix('dogs')->group(function () {
		Route::prefix('profile')->group(function () {
			Route::get('/{id}', 'DogController@show')->name('api.dogs.profile.show');
			Route::post('', 'DogController@create')->name('api.dogs.profile.create');
		});

		Route::prefix('profiles')->group(function () {
			Route::get('', 'DogController@index')->name('api.dogs.profiles.index');
			Route::get('/find', 'DogController@find')->name('api.dogs.profiles.find');
		});
	});
});
