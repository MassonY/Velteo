<?php
use Carbon\Carbon;
/**
 * Created by PhpStorm.
 * User: Epulapp
 * Date: 06/10/2016
 * Time: 08:39
 */
header('Content-Type: text/plain');
ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://api.jcdecaux.com/vls/v1/stations?contract=Lyon&apiKey=80ddc1cff88b645913acbfbfeeea8897a142b951');
$obj = json_decode($json);
$idmeteo = DB::table('meteos')->select('id')->orderby('id', 'desc')->limit(1)->get()[0]->id;
foreach($obj as $current){
    $newStation = new \App\Station_Variable();
    $newStation->id_station =  $current->number;
    $newStation->id_meteo = $idmeteo;
    $newStation->nb_bikeStandAvailable = $current->available_bike_stands;
    $newStation->nb_bikeAvailable = $current->available_bikes;
    $newStation->timestamps = Carbon::now();
    //var_dump($newStation);
    //echo "<br/><br/>--------------------------------------   $i<br/><br/>";
    //$i++;
    $newStation->save();
}
?>