<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_id');
            $table->integer('media_title_id');
            $table->integer('size');
            $table->string('mime');
            $table->string('type');
            $table->string('image_name')->nullable();
            $table->string('video_name')->nullable();
            $table->string('image_url')->nullable()->unique();
            $table->string('video_url')->nullable()->unique();

            //$table->foreign('wedding_id')->references('id')->on('weddings');
            //$table->foreign('media_title_id')->references('id')->on('wedding_media_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_media');
    }
}
