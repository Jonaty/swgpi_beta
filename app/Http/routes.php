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

/*Route::get('test', function()
{
	$user = new App\User;

	$user->nombre = 'Giovanna';
	$user->email = 'giovanna@hotmail.com';
	$user->password = bcrypt('giovanna123');
	$user->rol = 'moderador';

	$user->save();

	return $user;
});*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::resource('administradores', 'AdminsController');

Route::resource('usuarios', 'UsuariosController');

Route::resource('moderadores', 'ModeradoresController');

Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@showLoginForm']);

Route::post('login', 'Auth\AuthController@login');

Route::get('salir', 'Auth\AuthController@logout');