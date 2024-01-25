<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;




class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'Примерно заглавие на статията 0',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 1',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 2',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 3',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 4',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 5',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 6',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 7',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 8',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 9',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 10',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 11',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 12',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 13',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 14',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 15',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 16',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 17',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 18',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 19',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ],
            [
                'title' => 'Примерно заглавие на статията 20',
                'content' => 'Lorem ipsum dolor body of article sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
            ]
        ]);
    }
}
