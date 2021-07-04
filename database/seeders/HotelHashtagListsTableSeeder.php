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
                    ]),
                'hashtag_list_id' => $faker->randomElement([
                        '6698',
                        '7788',
                        '9023',
                    ])
            ]);
        }
    }
}
