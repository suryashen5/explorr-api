<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([HashtagSeeder::class, FacilitySeeder::class, HotelSeeder::class, HotelHashtagListSeeder::class, HotelFacilityListSeeder::class]);
    }
}
