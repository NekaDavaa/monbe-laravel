<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class WindowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('windows')->insert([
            ['window_name' => 'Window 1',
                'car_id' => '1'
            ],
            ['window_name' => 'Window 2',
                'car_id' => '1'],
            ['window_name' => 'Window 3',
                'car_id' => '2']
        ]);
    }
}
