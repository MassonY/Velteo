<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meteo extends Model
{
    protected $fillable = [
      'id','temp','pressure','humidity','weather','wind_speed','timestamp'
    ]
}
