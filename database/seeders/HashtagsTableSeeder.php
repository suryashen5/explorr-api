<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HashtagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $hashtags = [
            '6698',
            '7788',
            '9023',
            '9238',
            '0932',
        ];
        $name = [
            'Night View', 'Nature', 'Japan', 'Hotel', 'Wooden'
        ];
        $code = [
            "nightview", "nature", 'japan', 'hotel', 'wooden'
        ];
    	foreach (range(0,4) as $index) {
            DB::table('hashtags')->insert([
                'id'=> $hashtags[$index],
                'name'=> $faker->randomElement([
                    'Night View', 'Nature', 'Japan'
                ]),
                'code'=> $faker->randomElement([
                    "nightview", "nature", 'japan'
                ]),
            ]);
        }
    }
}
