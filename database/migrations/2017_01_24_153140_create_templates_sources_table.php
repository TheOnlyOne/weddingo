<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates_sources', function (Blueprint $table) {
            $table->integer('template_id');
            $table->integer('wedding_id');
            $table->integer('element_id');
            $table->longText('element_val');
            //$table->foreign('template_id')->references('id')->on('wedding_templates');
            //$table->foreign('element_id')->references('id')->on('templates_elements');
            //$table->foreign('wedding_id')->references('id')->on('weddings');

            //$table->primary(['template_id', 'wedding_id', 'element_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates_sources');
    }
}
