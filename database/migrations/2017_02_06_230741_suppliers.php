<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Suppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_type');
            $table->string('name');
            $table->integer('city_id');
            $table->string('street')->nullable();
            $table->string('desc')->nullable();
            $table->integer('logo_id')->default(0);
            $table->integer('theme_id')->default(0);
            $table->string('email')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('web_url')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            
            //$table->foreign('supplier_type')->references('id')->on('supplier_types');
            //$table->foreign('city_id')->references('id')->on('cities');
            //$table->foreign('logo_id')->references('id')->on('supplier_media');
            //$table->foreign('theme_id')->references('id')->on('supplier_media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
