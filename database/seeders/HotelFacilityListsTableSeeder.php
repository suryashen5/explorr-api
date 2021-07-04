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
