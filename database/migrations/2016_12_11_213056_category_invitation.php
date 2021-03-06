<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryInvitation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_invitation', function (Blueprint $table) {
            $table->increments('cat_id');
            $table->integer('wedding_id');
            $table->string('name');
            //$table->foreign('wedding_id')->references('id')->on('weddings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_invitation');
    }
}
