<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TasksToWeddings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_to_weddings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_id');
            $table->integer('task_id');
            $table->boolean('exec')->default(0);;
            $table->string('comment')->nullable();
            $table->string('place');
            $table->boolean('is_deleted')->default(0);

            $table->foreign('wedding_id')->references('id')->on('weddings');
            $table->foreign('task_id')->references('id')->on('tasks_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks_to_weddings');
    }
}
