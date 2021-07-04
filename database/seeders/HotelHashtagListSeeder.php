<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelHashtagListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel_hashtag_lists')->insert([[
            'hashtag_list_id' => '216906c0-10d8-452e-b52e-361689214c49',
            'hashtag_id' => 1
        ], [
            'hashtag_list_id' => '216906c0-10d8-452e-b52e-361689214c49',
            'hashtag_id' => 2
        ], [
            'hashtag_list_id' => '216906c0-10d8-452e-b52e-361689214c49',
            'hashtag_id' => 3
        ]]);
    }
}
