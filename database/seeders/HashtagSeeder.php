<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hashtags')->insert([[
            'name' => 'Night View',
            'code' => 'nightview'
        ], [
            'name' => 'Hotel',
            'code' => 'hotel'
        ], [
            'name' => 'Nature',
            'code' => 'nature'
        ]]);
    }
}
