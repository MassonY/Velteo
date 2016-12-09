<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/graphs', 'GraphsController@graph_hours');

Route::get('/getDataMeteo', function(){
    return view('getDataMeteo');
});

Route::get('/getDataStationStatic', function(){
    return view('getDataStationStatic');
});

Route::get('/getDataStationVariable', function(){
    return view('getDataStationVariable');
});