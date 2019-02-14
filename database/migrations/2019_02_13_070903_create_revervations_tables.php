<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevervationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revervations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people');
            $table->datetime('date');
            $table->float('time');
            $table->integer('phone');
            $table->string('email');
            $table->string('name');
            $table->unsignedInteger('tables_id');
            $table->foreign('tables_id')->references('id')->on('tables');
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
        Schema::dropIfExists('revervations');
    }
}
