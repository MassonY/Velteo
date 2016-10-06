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
foreach($obj as $current){
    $newStation = new \App\Station_Static();
    $newStation->id = $current->number;
    $newStation->name =  $current->name;
    $newStation->lat = $current->position->lat;
    $newStation->lng = $current->position->lng;
    $newStation->banking = $current->banking;
    $newStation->bonus = $current->bonus;
    $newStation->bike_stands = $current->bike_stands;
    $newStation->timestamps = Carbon::now();
    //var_dump($newStation);
    //echo "<br/>--------------------------------------<br/>";
    $newStation->save();
}
?>