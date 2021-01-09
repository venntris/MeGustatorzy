<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'owner' => 1,
            'name' => 'Wszyscy',
        ]);
        DB::table('rooms')->insert([
            'owner' => 1,
            'name' => 'Restauracja 1',
        ]);
        DB::table('rooms')->insert([
            'owner' => 2,
            'name' => 'Restauracja 2',
        ]);
    }
}
