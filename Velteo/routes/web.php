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
    return view('welcome');
});

Route::get('/getDataMeteo', function(){
    return view('getDataMeteo');
});

Route::get('/getDataStationStatic', function(){
    return view('getDataStationStatic');
});

Route::get('/getDataStationVariable', function(){
    return view('getDataStationVariable');
});

Route::get('/display', function(){
    $lava = new \Khill\Lavacharts\Lavacharts();

    $reasons = $lava->DataTable();

    $reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent')
        ->addRow(array('Check Reviews', 5))
        ->addRow(array('Watch Trailers', 2))
        ->addRow(array('See Actors Other Work', 4))
        ->addRow(array('Settle Argument', 89));


    $donutchart = $lava->DonutChart('IMDB', $reasons, [
        'title' => 'Reasons I visit IMDB'
    ]);


    return view('display', [
        'lava'      => $lava
    ]);
});