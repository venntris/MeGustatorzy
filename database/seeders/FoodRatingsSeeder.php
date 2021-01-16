<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FoodRatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            DB::table('food_ratings')->insert([
                'user_id' => 1,
                'food_id' => $i,
                'room_id' => 1,
                'rate' => 4
            ]);
        }
        for ($i = 2; $i <= 6; $i++) {
            DB::table('food_ratings')->insert([
                'user_id' => $i,
                'food_id' => 2,
                'room_id' => 1,
                'rate' => 3
            ]);
        }
    }
}
