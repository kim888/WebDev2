<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 10; $x++) {
            DB::table('users')->insert([
                'lastname' => str_random(10),
                'surename' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'city' => str_random(10),
                'street' => str_random(10),
                'streetnumber' => random_int(001, 999),
                'zip' => random_int(11111,99999),
                'country' => str_random(10),
                'telephone' => random_int(1,9999),
                //'date' => Carbon::parse('2000-01-01')
            ]);
        }
    }
}
