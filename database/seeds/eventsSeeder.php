<?php

use Illuminate\Database\Seeder;

class eventsSeeder extends Seeder
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
    }
}
