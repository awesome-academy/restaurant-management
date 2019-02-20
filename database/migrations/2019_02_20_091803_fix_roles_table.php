<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_roles', function (Blueprint $table) {
            $table->renameColumn('roles_id', 'role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->renameColumn('users_id', 'user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_roles', function (Blueprint $table) {
            $table->renameColumn('role_id', 'roles_id');
            $table->dropForeign(['role_id']);
            $table->renameColumn('user_id', 'users_id');
            $table->dropForeign(['user_id']);
        });
    }
}
