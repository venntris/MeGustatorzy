<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'name' => 'piwo',
        ]);
        DB::table('foods')->insert([
            'name' => 'pizza',
        ]);
        DB::table('foods')->insert([
            'name' => 'golonka',
        ]);
        DB::table('foods')->insert([
            'name' => 'chabanina',
        ]);
        DB::table('foods')->insert([
            'name' => 'kielbaska',
        ]);
    }
}
