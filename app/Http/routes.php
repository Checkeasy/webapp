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

Route::get('/', 			['as' => 'index',    	'uses' => 'HomeController@index']);

Route::get('signup', 		['as' => 'signup',   	'uses' => 'HomeController@signup']);

Route::get('customer', 		['as' => 'customer', 	'uses' => 'HomeController@customer']);

Route::get('restaurant', 	['as' => 'restaurant', 	'uses' => 'HomeController@restaurant']);

Route::get('thank_you', 	['as' => 'thank_you', 	'uses' => 'HomeController@thanks']);

