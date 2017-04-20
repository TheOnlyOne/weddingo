<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Presents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_id');
            $table->string('from');
            $table->integer('guest_count')->default(1);;
            $table->integer('amount');
            $table->string('comment')->nullable();

            $table->foreign('wedding_id')->references('id')->on('weddings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presents');
    }
}
