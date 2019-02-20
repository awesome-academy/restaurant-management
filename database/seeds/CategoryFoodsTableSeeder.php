<?php

use Illuminate\Database\Seeder;

class CategoryFoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_foods')->insert([
        	['categories_id'='9','foods_id'='1'],
        	['categories_id'='3','foods_id'='2'],

        ]);
    }
}
