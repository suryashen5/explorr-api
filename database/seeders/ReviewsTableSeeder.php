<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReviewsTableSeeder extends Seeder
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
            DB::table('reviews')->insert([
                'user_id' => $faker->randomElement(['11205','12345','12312',]),
                'hotel_id' => $faker->randomElement([
                    "12345678",
                    "91011121",
                    "31415161",
                ]),
                'rating' => $faker->numberBetween(1,10),
                'description' => $faker->text,
            ]);
        }
    }
}
