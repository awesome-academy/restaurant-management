<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->renameColumn('foods_id', 'food_id');
            $table->foreign('food_id')->references('id')->on('foods');
            $table->renameColumn('users_id', 'user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->renameColumn('news_id', 'new_id');
            $table->foreign('new_id')->references('id')->on('news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->renameColumn('food_id', 'foods_id');
            $table->dropForeign(['food_id']);
            $table->renameColumn('user_id', 'users_id');
            $table->dropForeign(['user_id']);
            $table->renameColumn('new_id', 'news_id');
            $table->dropForeign(['new_id']);
        });
    }
}
