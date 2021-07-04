<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HotelHashtagListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
            DB::table('hotel_hashtag_lists')->insert([
                'hashtag_list_id' => $faker->randomElement([
                    '186aba28-6706-47ed-bed3-100ecd6058f4',
                    'bceb8818-f7a8-47f3-8b4c-4ad5f16d092f',
                    'f1ea7d64-7487-47df-8b46-ff995cfeaef2',
                    '575f1d87-bc13-4a21-b6f0-1b238944c2c7', 
                    'd13ff639-77bd-40a6-aee0-e4e30d1dd438', 
                    'e5f30aba-3d12-426b-b713-e30209e61ec6', 
                    '88238c56-362c-4d53-9bbf-245d075293fc', 
                    'd8fb080b-9e45-4994-8b70-7b3eca9afaa4', 
                    '9c162173-a581-4b29-805e-06026b842155', 
                    '51f1c4e0-a8a5-409c-8f43-ff9b1da6f1a6',
                ]),
                'hashtag_id' => $faker->randomElement([
                    '6698',
                    '7788',
                    '9023',
                    '9238',
                    '0932',
                ])
            ]);
        }
    }
}
