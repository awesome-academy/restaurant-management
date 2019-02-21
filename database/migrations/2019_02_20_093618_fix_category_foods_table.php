<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixCategoryFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_foods', function (Blueprint $table) {
            $table->renameColumn('foods_id', 'food_id');
            $table->foreign('food_id')->references('id')->on('foods');
            $table->renameColumn('categories_id', 'category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_foods', function (Blueprint $table) {
            $table->renameColumn('food_id', 'foods_id');
            $table->dropForeign(['food_id']);
            $table->renameColumn('category_id', 'categories_id');
            $table->dropForeign(['category_id']);
        });
    }
}
