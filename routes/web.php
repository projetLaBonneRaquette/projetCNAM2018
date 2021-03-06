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
use App\Terrain;
use App\Adherant;
use App\Reservation;

// Default
Route::get('/', function () {

	$users = User::all();
    $terrain1 = 'Terrain 1';
    $terrain2 = 'Terrain 2';
    $terrain3 = 'Terrain 3';
    $terrains = Terrain::all();
	$adherants = Adherant::all();
    $reserves = Reservation::all();

    $date = date("d-m-Y");
    $time = date("H:i");

	if (auth()->guest()) {
        	return view('welcome');
	}
    
    return view('home',['date' => $date,
                        'time' => $time,
                        'reserves' => $reserves,
                        'terrains' => $terrains,
                        'terrain1' => $terrain1,
                        'terrain2' => $terrain2,
                        'terrain3' => $terrain3,
                        'adherants' => $adherants
                    ]);

});

// Authentication
Auth::routes();
// Home
Route::get('/home', 'HomeController@index')->name('home');
// Créer un utilisateur
Route::get('/create_user', 'CreateUserController@index');
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
// reservation
Route::get('/reservation', 'ReservationController@index');
Route::get('/reserve', 'ReservationController@createReserve');
Route::post('/reserve', 'ReservationController@storeReserve');
Route::get('/terrain', 'ReservationController@createTerra');
Route::post('/terrain', 'ReservationController@storeTerra');
