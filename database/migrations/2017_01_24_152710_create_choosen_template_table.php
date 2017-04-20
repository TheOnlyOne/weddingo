<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoosenTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_templates_picks', function (Blueprint $table) {
            $table->integer('template_id');
            $table->integer('wedding_id');

            //$table->foreign('template_id')->references('id')->on('wedding_templates');
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
        Schema::dropIfExists('users_templates_picks');
    }
}
