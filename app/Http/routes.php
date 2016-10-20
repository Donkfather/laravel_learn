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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('articles','ArticlesController');

Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController'
	]);

/**
* The Auth routes.
*
*
* @param
* @return Response
*/
	
Route::auth();

/**
* Route made for dashboard.
*
*
* @param
* @return Response
*/

Route::get('/home', 'HomeController@index');

/**
* Example middleware route.
* Can be deleted.
*
* @param
* @return Response
*/
	
Route::get('foo',['middleware'=>'manager',function()
{
	return 'this ipage may only be viewed by managers';
}]);
