<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FanPlayerTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fan_player')->insert([
            ['fan_id' => '1',
             'player_id' => '1'
            ],
            ['fan_id' => '2',
             'player_id' => '2'
            ],
            ['fan_id' => '1',
             'player_id' => '2'
            ],
        ]);
    }
}
