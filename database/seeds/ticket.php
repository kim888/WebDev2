<?php

use Illuminate\Database\Seeder;

class ticket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket')->insert([
            'kuenstler' => 'Flogging Molly',
            'platznummer' => '1',
            'platzreihe' => '1',
            'datum' => '2018-05-12',
            'uhrzeit' => '19:36:00',
            'preis' => '95.23',

        ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'Paul Kalkbrenner',
            'platznummer' => '15',
            'platzreihe' => '4',
            'datum' => '2019-02-09',
            'uhrzeit' => '20:36:00',
            'preis' => '105.00',

        ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'Eminem',
            'platznummer' => '25',
            'platzreihe' => '3',
            'datum' => '2018-11-02',
            'uhrzeit' => '21:20:00',
            'preis' => '110.95',

        ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'Nas',
            'platznummer' => '3',
            'platzreihe' => '2',
            'datum' => '2019-06-18',
            'uhrzeit' => '22:30:00',
            'preis' => '100.00',

    ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'Rihanna',
            'platznummer' => '23',
            'platzreihe' => '8',
            'datum' => '2019-02-01',
            'uhrzeit' => '22:30:00',
            'preis' => '199.00',

        ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'Florian Silbereisen',
            'platznummer' => '1',
            'platzreihe' => '1',
            'datum' => '2019-01-14',
            'uhrzeit' => '21:30:00',
            'preis' => '82.00',

        ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'The Offspring',
            'platznummer' => '33',
            'platzreihe' => '5',
            'datum' => '2018-12-03',
            'uhrzeit' => '23:00:00',
            'preis' => '65.00',

        ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'Rise Against',
            'platznummer' => '43',
            'platzreihe' => '3',
            'datum' => '2018-09-09',
            'uhrzeit' => '20:15:00',
            'preis' => '73.00',

        ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'Beatsteaks',
            'platznummer' => '31',
            'platzreihe' => '7',
            'datum' => '2019-02-18',
            'uhrzeit' => '20:00:00',
            'preis' => '105.00',

        ]);
        DB::table('ticket')->insert([
            'kuenstler' => 'Bob Marley',
            'platznummer' => '28',
            'platzreihe' => '2',
            'datum' => '2019-08-22',
            'uhrzeit' => '20:30:00',
            'preis' => '120.00',

        ]);
    }
}
