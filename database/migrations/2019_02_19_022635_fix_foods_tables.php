<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixFoodsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foods', function (Blueprint $table) {
            //
            $table->dropForeign(['food_image_id']);
            $table->dropColumn('food_image_id');
            $table->longtext('ingredient')->change();
            $table->longtext('content')->change();
            $table->string('unit')->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foods', function (Blueprint $table) {
            $table->foreign('food_image_id')->references('id')->on('food_image');
            $table->unsignedInteger('food_image_id');
            $table->string('ingredient')->change();
            $table->string('content')->change();
            $table->dropColumn('unit');
        });
    }
}
