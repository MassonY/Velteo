<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeteoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('meteos', function(Blueprint $table){
          $table->increments('id');
          $table->float('temperature');
          $table->float('pressure');
          $table->integer('humidity');
          $table->string('weather');
          $table->float('wind_speed');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop("meteos");
    }
}
