<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station_Static extends Model
{
    protected $table = "station_statics";
    protected $fillable = [
      'id','name','lat','lng','banking','bonus','bank_stands'
    ];
}
