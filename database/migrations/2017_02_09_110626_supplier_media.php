<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SupplierMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id');
            $table->integer('media_title_id');
            $table->integer('size');
            $table->string('mime');
            $table->string('type');
            $table->string('image_name')->nullable();
            $table->string('image_url')->nullable()->unique();

            //$table->foreign('supplier_id')->references('id')->on('suppliers');
            //$table->foreign('media_title_id')->references('id')->on('supplier_media_titles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_media');
    }
}
