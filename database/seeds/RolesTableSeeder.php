<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
        	['authorities'='admin'],
        	['authorities'='read'],
        	['authorities'='comment'],
        	['authorities'='order'],
        	['authorities'='rate'],
        	['authorities'='revervation'],
        ]);
    }
}
