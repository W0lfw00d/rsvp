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
    return view('rsvp');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::post('/thankyou', ['as' => 'thankyou', 'uses' => 'RSVPController@store']);

Route::auth();

Route::get('/home', 'HomeController@index');
//Route::get('/index', 'RSVPController@index');
