<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixFoodImageTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_image', function (Blueprint $table) {
            //
            $table->dropColumn('name');
            $table->unsignedInteger('foods_id');
            $table->foreign('foods_id')->references('id')->on('foods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food_image', function (Blueprint $table) {
            //
            $table->string('name');
            $table->dropForeign(['foods_id']);
        });
    }
}
