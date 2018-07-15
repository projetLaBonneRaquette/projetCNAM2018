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

use App\User;

// Default
Route::get('/', function () {
	$users = User::all();

	if ($users){
	    return view('home');
	}
	
	else {
		return view('welcome');
	}
});

// Authentication
Auth::routes();

// Home
Route::get('/home', 'HomeController@index')->name('home');

// Créer un utilisateur
Route::get('/create_user', 'CreateUserController@showRegistrationForm');
Route::post('/store_user', 'CreateUserController@store');

// Adherants
Route::get('/adherants', 'AdherantsController@index');
Route::get('/adherants/test', 'AdherantsController@test');
Route::get('/adherants/{adherant}', 'AdherantsController@show');
Route::get('/adherant/create', 'AdherantsController@create');
Route::post('/adherant', 'AdherantsController@store');
Route::get('/adherant/edit/{adherant}', 'AdherantsController@edit');
Route::put('/adherant/update/{adherant}', 'AdherantsController@update');
Route::put('/delete/{adherant}', 'AdherantsController@destroy');
//Route::post('/adherants/{adherant}', 'AdherantsController@update');
//Route::get('adherants/delete/{id}', 'AdherantsController@destroy');