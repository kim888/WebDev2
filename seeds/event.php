<?php

use Illuminate\Database\Seeder;

class event extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'datum' => '2018-05-12',
            'beginn' => '19:25:00',
            'locationId' => '1',
        ]);
        DB::table('events')->insert([
            'datum' => '2018-11-02',
            'beginn' => '21:20:00',
            'locationId' => '2',
        ]);
        DB::table('events')->insert([
            'datum' => '2019-02-09',
            'beginn' => '20:36:00',
            'locationId' => '3',
        ]);
        DB::table('events')->insert([
            'datum' => '2019-06-18',
            'beginn' => '22:30:00',
            'locationId' => '4',
        ]);
        DB::table('events')->insert([
            'datum' => '2019-02-01',
            'beginn' => '22:30:00',
            'locationId' => '5',
        ]);
        DB::table('events')->insert([
            'datum' => '2019-01-14',
            'beginn' => '21:30:00',
            'locationId' => '3',
        ]);
        DB::table('events')->insert([
            'datum' => '2018-12-03',
            'beginn' => '23:00:00',
            'locationId' => '7',
        ]);
        DB::table('events')->insert([
            'datum' => '2018-09-09',
            'beginn' => '20:15:00',
            'locationId' => '6',
        ]);
        DB::table('events')->insert([
            'datum' => '2019-02-18',
            'beginn' => '20:00:00',
            'locationId' => '8',
        ]);
        DB::table('events')->insert([
            'datum' => '2019-08-22',
            'beginn' => '20:30:00',
            'locationId' => '6',
        ]);
    }
}
