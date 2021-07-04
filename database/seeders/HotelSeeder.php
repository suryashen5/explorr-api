<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([[
            'name' => 'Favehotel Pluit Junction',
            'address' => 'Jln. Jembatan III raya Nomor 21A - 31',
            'description' => 'Favehotel menyajikan suasana liburan bertema nightview dan nature untuk kamu yang menyukai suasana alam sekaligus ingin menikmati pemandangan malam yang indah tanpa terganggu oleh kebisingan suasana kota. Dilengkapi dengan fasilitas kolam berenang bertema amazon yang dapat membuat atmosfir serta suasana alam yang tidak dapat kamu temukan di hotel-hotel kota Jakarta pada umumnya',
            'location' => 'Penjaringan, Jakarta Utara',
            'hashtag_list_id' => '216906c0-10d8-452e-b52e-361689214c49',
            'facility_list_id' => 'ed03d84b-fd5c-4982-a7f6-d8694141af96'
        ]]);
    }
}
