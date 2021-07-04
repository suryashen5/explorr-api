<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user_lists = ['11205','12345','12312',];
    	foreach (range(0,2) as $index) {
            DB::table('users')->insert([
                'id' => $user_lists[$index],
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_number'=>$faker->phoneNumber,
                'password' => password_hash('secret', PASSWORD_BCRYPT),
            ]);
        }
    }
}