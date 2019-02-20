<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('login_name');
            $table->renameColumn('full_name', 'name');
            $table->string('address')->nullable()->change();
            $table->integer('phone')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('login_name');
            $table->integer('phone');
            $table->renameColumn('name', 'full_name');
            $table->string('address')->change();
            $table->string('phone')->change();
        });
    }
}
