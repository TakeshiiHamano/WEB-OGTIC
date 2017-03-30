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

Route::get('proyecto', [
	'uses' => 'PagesController@getProyecto', 
	'as' => 'proyecto'
]);
Route::get('/', [
	'uses' => 'PagesController@getNosotros', 
	'as' => 'nosotros'
]);
Route::get('desarrollo', [
	'uses' => 'PagesController@getDesarrollo', 
	'as' => 'desarrollo'
]);
Route::get('soporte', [
	'uses' => 'PagesController@getSoporte', 
	'as' => 'soporte'
]);
Route::get('gestion', [
	'uses' => 'PagesController@getGestion', 
	'as' => 'gestion'
]);