<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station_Variable extends Model
{
    protected $table = "station_variables";
    protected $fillable = [
      'id','id_station','id_meteo','nb_bikeStandAvailable','nb_bikeAvailable'
    ];
}
