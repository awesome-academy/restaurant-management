<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('roles')->insert([
            ['authorities' => 'admin'],
            ['authorities' => 'customer'],
            ['authorities' => 'read'],
            ['authorities' => 'comment'],
            ['authorities' => 'order'],
            ['authorities' => 'rate'],
            ['authorities' => 'revervation'],
        ]);
    }
}
