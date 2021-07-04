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
        foreach (range(1, 10) as $index) {
            DB::table('reviews')->insert([
                'user_id' => $faker->randomElement(['11205','12345','12312',]),
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
                'rating' => $faker->numberBetween(1, 5),
                'description' => $faker->text,
            ]);
        }
    }
}
