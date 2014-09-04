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

Route::get('/', 'HomeController@getHomepage');
Route::get('/about', 'AboutController@getAbout');
Route::get('/contact', 'ContactController@getContact');
Route::get('/sponsors', 'SponsorsController@getSponsors');
Route::get('/join', 'JoinController@getJoin');
