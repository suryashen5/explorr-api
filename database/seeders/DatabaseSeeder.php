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
        $this->call([
            UsersTableSeeder::class,
            HashtagsTableSeeder::class, FacilitiesTableSeeder::class,
            HotelTableSeeder::class, HotelFacilityListsTableSeeder::class,
            HotelHashtagListsTableSeeder::class, RoomsTableSeeder::class,
            PhotosTableSeeder::class, ReviewsTableSeeder::class,
        ]);
    }
}
