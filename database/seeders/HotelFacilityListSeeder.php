<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelFacilityListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel_facility_lists')->insert([[
            'facility_list_id' => 'ed03d84b-fd5c-4982-a7f6-d8694141af96',
            'facility_id' => 1
        ], [
            'facility_list_id' => 'ed03d84b-fd5c-4982-a7f6-d8694141af96',
            'facility_id' => 2
        ], [
            'facility_list_id' => 'ed03d84b-fd5c-4982-a7f6-d8694141af96',
            'facility_id' => 3
        ], [
            'facility_list_id' => 'ed03d84b-fd5c-4982-a7f6-d8694141af96',
            'facility_id' => 4
        ], [
            'facility_list_id' => 'ed03d84b-fd5c-4982-a7f6-d8694141af96',
            'facility_id' => 5
        ]]);
    }
}
