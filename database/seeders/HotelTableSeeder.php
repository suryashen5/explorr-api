<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $hotel_lists = [
                    "12345678",
                    "91011121",
                    "31415161",
        ];
    	foreach (range(0,2) as $index) {
            DB::table('hotels')->insert([
                'id' => $hotel_lists[$index],
                'name' => $faker->kommune,
                'address' => $faker->estate,
                'description' => $faker->text,
                'price_per_night' => $faker->numberBetween(1234,99999),
                'location' => $faker->town,
                'facility_list_id' => $faker->randomElement(
                    [
                        '0dcd7c92-5452-4037-9e61-41e82522e99a', 
                        '210a01a9-66ce-4f92-a46a-3c6051d6bd2c',
                        '2bbd1d6b-e65d-4e22-a59f-0acb59c248da',
                    ]),
                'hashtag_list_id' => $faker->randomElement(
                    [
                        '186aba28-6706-47ed-bed3-100ecd6058f4',
                        'bceb8818-f7a8-47f3-8b4c-4ad5f16d092f',
                        'f1ea7d64-7487-47df-8b46-ff995cfeaef2',
                    ])
            ]);
        }
    }
}