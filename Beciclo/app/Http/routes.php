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
Route::resource('productes','ProductesController');
Route::resource('preferits','PreferitsController');
Route::resource('users','UsersController');
Route::model('productes', 'Producte');
Route::model('preferits', 'Preferit');
Route::model('comentaris','Comentari');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::bind('productes', function($value, $route) {
	return App\Producte::where('id', '=', $value)->first();
});
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);