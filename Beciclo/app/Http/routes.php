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

Route::get('/', 'ProductesController@index');

//Route::get('home', 'HomeController@index');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

// Provide controller methods with object instead of ID
Route::model('usuaris','Usuari'); // +
Route::model('productes','Producte');
Route::model('preferits','Preferit');
Route::model('comentaris','Comentari');

//Solamente administrador podra ver la lista de todos los usuarios tegistrados ; 
Route::resource('usuaris', 'UsuarisController'); // +
// Usuarios podran ver la lista de todos los productos disponibles en la web
Route::resource('productes', 'ProductesController');
//Route::resource('preferits', 'PreferitsController');
//Route::resource('comentaris', 'ComentarisController');
Route::resource('usuaris.productes', 'ProductesController'); // +
Route::resource('productes.preferits', 'PreferitsController'); // + - no acabado , cambiar controller de manera que podamos ver los preferidos de un usuario <
Route::resource('productes.comentaris', 'ComentarisController'); // +


Route::bind('usuaris', function($value, $route) {
	return App\Usuari::where('id', '=', $value)->first();
});
Route::bind('productes', function($value, $route) {
	return App\Producte::where('id', '=', $value)->first();
});
Route::bind('preferits', function($value, $route) {
	return App\Preferit::where('id', '=', $value)->first();
});
Route::bind('comentaris', function($value, $route) {
	return App\Comentari::where('id', '=', $value)->first();
});

// Controlador de idioma
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);