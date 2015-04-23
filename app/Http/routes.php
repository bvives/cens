<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Provide controller methods with object instead of ID
Route::model('votants', 'Votant');
Route::model('poblacions', 'Poblacion');

Route::bind('votants', function($value, $route) {
	return App\Votant::whereSlug($value)->first();
});
Route::bind('poblacions', function($value, $route) {
	return App\Poblacion::whereSlug($value)->first();
});
Route::resource('poblacions', 'PoblacionsController');
Route::resource('poblacions.votants', 'VotantsController');