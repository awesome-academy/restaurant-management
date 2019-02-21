<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_detail', function (Blueprint $table) {
            $table->renameColumn('foods_id', 'food_id');
            $table->foreign('food_id')->references('id')->on('foods');
            $table->renameColumn('orders_id', 'order_id');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_detail', function (Blueprint $table) {
            $table->renameColumn('food_id', 'foods_id');
            $table->dropForeign(['food_id']);
            $table->renameColumn('order_id', 'orders_id');
            $table->dropForeign(['order_id']);
        });
    }
}
