<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationVariableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('station_variable', function(Blueprint $table){
        $table->increments('id');
        $table->integer('id_station')->references('id')->on('station_static');
        $table->integer('id_meteo')->references('id')->on('meteo');
        $table->integer('nb_bikeStandAvailable');
        $table->integer('nb_bikeAvailable');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('station_variable');
    }
}
