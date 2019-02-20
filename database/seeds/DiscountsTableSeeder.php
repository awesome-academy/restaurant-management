<?php

use Illuminate\Database\Seeder;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
        	['percent'='30%','start_date'='2019-02-10','end_date'='2019-02-20'],
        	['percent'='20%','start_date'='2019-01-20','end_date'='2019-01-30'],
        	['percent'='10%','start_date'='2019-02-05','end_date'='2019-02-09'],
        ]);
    }
}
