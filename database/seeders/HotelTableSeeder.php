<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $ids = [
                    "09320102",
                    "12309582",
                    "39028575",
                    "12345678",
                    "91011121",
                    "31415161",
                    "59203123",
                    "12375392",
                    "09319380",
                    "12398571",
        ];
        $facility_lists = [
            '0dcd7c92-5452-4037-9e61-41e82522e99a', 
            '210a01a9-66ce-4f92-a46a-3c6051d6bd2c',
            '2bbd1d6b-e65d-4e22-a59f-0acb59c248da',
            'bf091d80-0d81-40a1-9e0f-2285552381ba', 
            '77a9a1ef-1736-4f94-8cf9-b580b2fa97dd', 
            '7bd023d1-5e5f-4a84-a1e4-a2539feff43f', 
            '0f45cbe3-4683-4517-9727-adebada45cc5', 
            '6ddb1b41-769a-4f65-b93f-01aab8ea7fac', 
            'd3256a7a-a911-410c-9320-bf4d50f58835', 
            'f495a0cc-75ea-4dbe-a99b-f9d8639f1f6e',
        ];
        $hashtag_lists = [
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
        ];
        $hotels_lists = [
            "Fave Solution Hotel",
            "Gober Hotel",
            "Midoriya Hotel",
            "Gloria Hotel",
            "Matthew Apartment",
            "EEO Apartement",
            "File Villa",
            "Surya Resort",
            "Chang Hotel",
            "Toni Villa",
            "Agus Penthouse"
        ];
    	foreach (range(0,9) as $index) {
            DB::table('hotels')->insert([
                'id' => $ids[$index],
                'name' => $hotels_lists[$index],
                'address' => $faker->address,
                'description' => $faker->text,
                'location' => $faker->randomElement([
                    "Jakarta Utara",
                    "Jakarta Barat",
                    "Jakarta Timur",
                    "Jakarta Selatan",
                ]),
                'facility_list_id' => $facility_lists[$index],
                'hashtag_list_id' => $hashtag_lists[$index],
            ]);
        }
    }
}