<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Krystian',
            'surname' => 'Wójcik',
            'email' => 'krystian@example.com',
            'password' => bcrypt('pass'),
        ]);
        DB::table('users')->insert([
            'name' => 'Kamil',
            'surname' => 'Kaślikowski',
            'email' => 'kamil@example.com',
            'password' => bcrypt('pass'),
        ]);
        DB::table('users')->insert([
            'name' => 'Michal',
            'surname' => 'Stefaniak',
            'email' => 'michals@example.com',
            'password' => bcrypt('pass'),
        ]);
        DB::table('users')->insert([
            'name' => 'Klaudia',
            'surname' => 'Dylewska',
            'email' => 'klaudia@example.com',
            'password' => bcrypt('pass'),
        ]);
        DB::table('users')->insert([
            'name' => 'Michał',
            'surname' => 'Berkowicz',
            'email' => 'michalb@example.com',
            'password' => bcrypt('pass'),
        ]);
        DB::table('users')->insert([
            'name' => 'Marek',
            'surname' => 'Trefler',
            'email' => 'marek@example.com',
            'password' => bcrypt('pass'),
        ]);

    }
}
