<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixRevervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('revervations', function (Blueprint $table) {
            $table->renameColumn('tables_id', 'table_id');
            $table->foreign('table_id')->references('id')->on('tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('revervations', function (Blueprint $table) {
            $table->renameColumn('tables_id', 'table_id');
            $table->dropForeign(['table_id']);
        });
    }
}
