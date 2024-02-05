<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fans')->insert([
            ['name' => 'Фен 1'],
            ['name' => 'Фен 2'],
            ['name' => 'Фен 3'],
        ]);
    }
}
