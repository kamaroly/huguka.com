<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',['as'	=>'home', function()
{
	return View::make('partials.register');
}]);

Route::get('url',function()
	{
		return Request::segment(1);
	});