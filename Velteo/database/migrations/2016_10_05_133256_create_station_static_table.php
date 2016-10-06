<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationStaticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('station_statics', function(Blueprint $table){
        $table->increments("id");
        $table->string("name");
        $table->double("lat");
        $table->double("lng");
        $table->boolean("banking");
        $table->boolean("bonus");
        $table->integer("bank_stands");
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop("station_statics");
    }
}
