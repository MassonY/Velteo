<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station_Static extends Model
{
    protected $fillable = [
      'id','name','lat','lng','banking','bonus','bank_stands'
    ]
}
