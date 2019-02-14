<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('ingredient');
            $table->string('content');
            $table->double('price');
            $table->boolean('hot');
            $table->boolean('new');
            $table->unsignedInteger('food_image_id');
            $table->foreign('food_image_id')->references('id')->on('food_image');
            $table->unsignedInteger('discounts_id');
            $table->foreign('discounts_id')->references('id')->on('discounts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
