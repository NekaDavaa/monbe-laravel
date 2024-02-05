<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            ['name' => 'Играч 1'],
            ['name' => 'Играч 2'],
            ['name' => 'Играч 3'],
        ]);
    }
}
