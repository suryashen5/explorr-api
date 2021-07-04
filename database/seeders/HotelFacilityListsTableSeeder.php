<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HotelFacilityListsTableSeeder extends Seeder
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
            DB::table('hotel_facility_lists')->insert([
                'facility_list_id' => $faker->randomElement(
                    [
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
                    ]),
                'facility_id' => $faker->randomElement(
                    [
                        '1234',
                        '5678',
                        '91011',
                    ])
            ]);
        }
    }
}
