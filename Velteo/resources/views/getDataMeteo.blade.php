<?php
use Carbon\Carbon;
/**
 * Created by PhpStorm.
 * User: Epulapp
 * Date: 06/10/2016
 * Time: 08:39
 */
ini_set("allow_url_fopen", 1);
$json = file_get_contents('http://api.openweathermap.org/data/2.5/forecast/city?id=2996944&APPID=20e9e7c2a6efe99edf931f9b17e6a3c7');
$obj = json_decode($json);
$currentWeather = $obj->list[0];
$meteo = new \App\Meteo();
$meteo->temperature = $currentWeather->main->temp;
$meteo->pressure = $currentWeather->main->pressure;
$meteo->humidity = $currentWeather->main->humidity;
$meteo->weather = $currentWeather->weather[0]->main;
$meteo->wind_speed = $currentWeather->wind->speed;
$meteo->timestamps = Carbon::now();
$meteo->save();
?>