<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'firm_name' => str_random(10),
            'licence_number' => str_random(10),
            'phone_number' => '8795422990',
            'mobile_number' => '8795492491',
            'email' => str_random(10).'@gmail.com',
            'street' => 'street',
            'city' => 'street',
            'state' => 'street',

            'pincode' => '265896',
            'username' => 'usernamdxsje1',

            'password' => bcrypt('secret'),
        ]);
    }
}
