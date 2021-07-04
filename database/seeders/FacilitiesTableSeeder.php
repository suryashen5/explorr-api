<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $facilities = [
                        '1234',
                        '5678',
                        '91011',
        ];
    	foreach (range(0,2) as $index) {
            DB::table('facilities')->insert([
                'id'=> $facilities[$index],
                'name'=> $faker->randomElement([
                    'Wifi', 'Restaurant', 'Parking', 'Pool', 'Television'
                ]),
            ]);
        }
    }
}
