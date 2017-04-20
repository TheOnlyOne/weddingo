<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cities extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('area_id');

            //$table->foreign('area_id')->references('id')->on('areas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
