<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingBudgetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_budget', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_id');
            $table->integer('budget_type_id');
            $table->string('supplier_name')->nullable();
            $table->integer('price');
            $table->integer('paid')->default(0);
            $table->string('comment')->nullable();

            //table->foreign('wedding_id')->references('id')->on('weddings');
            //$table->foreign('budget_type_id')->references('id')->on('budget_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_budget');
    }
}
