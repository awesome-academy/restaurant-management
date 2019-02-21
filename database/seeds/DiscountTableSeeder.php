<?php

use Illuminate\Database\Seeder;

class DiscountTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('discounts')->insert([
            ['percent' => '30%', 'start_date' => '2019-02-10', 'end_date' => '2019-02-20'],
            ['percent' => '20%', 'start_date' => '2019-03-10', 'end_date' => '2019-03-20'],
            ['percent' => '10%', 'start_date' => '2019-01-10', 'end_date' => '2019-01-20'],
        ])
    }
}
