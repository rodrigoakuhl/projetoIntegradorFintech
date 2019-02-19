<?php

use Illuminate\Database\Seeder;
use App\Opportunity;

class OpportunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opportunities')->insert([
            'status' => 1,
            'rate' => 'A',
            'requested_amount' => 50000.00,
            'return_rate' => 200.00,
            'funding_completed' => 20.00,
            'date_end' => '2019-03-01',
            'duration' => 24,
            'guarantee_percent' => 130.00 
        ]);

        DB::table('opportunities')->insert([
            'status' => 1,
            'rate' => 'B',
            'requested_amount' => 100000.00,
            'return_rate' => 150.00,
            'funding_completed' => 45.00,
            'date_end' => '2019-04-01',
            'duration' => 12,
            'guarantee_percent' => 180.00 
        ]);
    }
}
