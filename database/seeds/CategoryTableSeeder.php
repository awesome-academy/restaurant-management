<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => 'Starter/Khai vị'],
        	['name' => 'Special disher/Món đặc biệt'],
        	['name' => 'Grilled/Món nướng'],
        	['name' => 'Stir/Món xào'],
        	['name' => 'Salad/Món trộn'],
        	['name' => 'Fried rice/Cơm chiên'],
        	['name' => 'Hot disher/Món nóng'],
        	['name' => 'Side dish/Món phụ'],
        	['name' => 'Main course/Món chính'],
        	['name' => 'Soup/Súp'],
        	['name' => 'Vegetablerian/Món ăn kiêng'],
        	['name' => 'Drink/Đồ uống'],
        ]);
    }
}
