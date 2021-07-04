<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PhotosTableSeeder extends Seeder
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
            DB::table('photos')->insert([
                'hotel_id' => $faker->randomElement([
                    "12345678",
                    "91011121",
                    "31415161",
                ]),
                'name' => $faker->name,
                'path' => $faker->randomElement([
                    'random.png',
                    'random1.png',
                    'random2.png',
                ]),
                'date' => $faker->dateTime(),
            ]);
        }
    }
}
