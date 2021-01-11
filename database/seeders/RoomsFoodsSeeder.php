<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoomsFoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('room_food')->insert([
                'room_id' => 1,
                'food_id' => $i
            ]);
        }
        for ($i = 1; $i <= 1; $i++) {
            DB::table('room_food')->insert([
                'room_id' => 2,
                'food_id' => $i
            ]);
        }
        for ($i = 2; $i <= 5; $i++) {
            DB::table('room_food')->insert([
                'room_id' => 3,
                'food_id' => $i
            ]);
        }
    }
}
