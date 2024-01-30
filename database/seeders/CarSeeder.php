<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            ['car_name' => 'Кола 1'],
            ['car_name' => 'Кола 2'],
            ['car_name' => 'Кола 3'],
        ]);
    }
}
