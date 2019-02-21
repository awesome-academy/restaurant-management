<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
       $this->call(UserTableSeeder::class);
       $this->call(CategoryTableSeeder::class);
       $this->call(DiscountTableSeeder::class);
       $this->call(FoodTableSeeder::class);
       $this->call(RoleTableSeeder::class);
       $this->call(TableTableSeeder::class);
    }
}
