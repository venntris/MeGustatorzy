<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) {
            DB::table('users_rooms')->insert([
                'user_id' => $i,
                'room_id' => 1
            ]);
        }
        for ($i = 1; $i <= 3; $i++) {
            DB::table('users_rooms')->insert([
                'user_id' => $i,
                'room_id' => 2
            ]);
        }
        for ($i = 4; $i <= 6; $i++) {
            DB::table('users_rooms')->insert([
                'user_id' => $i,
                'room_id' => 3
            ]);
        }
    }
}
