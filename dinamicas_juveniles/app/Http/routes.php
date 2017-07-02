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

Route::get('/', 'PersonaController@create');
Route::get('home', 'PersonaController@create');
Route::get('paso2/{id_encargado}', 'GrupoController@create');
Route::get('paso3/{idGrupo}', 'RelacionController@create');
Route::get('paso4/{idGrupo}', 'PosibleRelacionController@create');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('persona','PersonaController');
Route::resource('grupo','GrupoController');
Route::resource('relacion','RelacionController');
Route::resource('posible-relacion','PosibleRelacionController');