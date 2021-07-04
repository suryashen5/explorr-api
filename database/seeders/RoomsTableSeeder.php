<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RoomsTableSeeder extends Seeder
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
            DB::table('rooms')->insert([
                'hotel_id' => $faker->randomElement([
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
                ]),
                'name' => $faker->randomElement([
                    "Single Deluxe", "Double Deluxe",
                    "Triple Deluxe", "Fourth Deluxe",
                    "Fifth Deluxe"
                ]),
                'price' => $faker->numberBetween(1234,99999),
                'slot' => $faker->numberBetween(1,10),
                'pax' => $faker->numberBetween(1,10),
                'bed' => $faker->numberBetween(1,10),
            ]);
        }
    }
}
