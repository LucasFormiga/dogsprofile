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
	Route::get('', 'ApiController@index')->name('api.index');

	Route::get('/profile/{id}', 'ApiController@profile')->name('api.profile');

	Route::prefix('profiles')->group(function () {
		Route::get('', 'ApiController@all')->name('api.profiles.all');
		Route::get('/search', 'ApiController@search')->name('api.profiles.search');
	});
});
