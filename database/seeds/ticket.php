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
        $ticket1 = new App\Ticket();
        $ticket1 -> bezahlt = false;
        $ticket1 -> kaufdatum = NOW();
        //$ticket1 -> user_id = 1;
        $ticket1 -> event_id = 1;
        $ticket1 -> save();


        $ticket2 = new App\Ticket();
        $ticket2-> bezahlt = false;
        $ticket2 -> kaufdatum = NOW();
        //$ticket2 -> user_id = 1;
        $ticket2 -> event_id = 2;

        //TODO reference
        $user1 = \App\User::whereId(1)->first();

        $ticket2->user()->associate($user1) -> save();
        $ticket1->user()->associate($user1) -> save();
//        $user1->tickets()->save($ticket2);

        /*
        DB::table('tickets')->insert([
            'kuenstler' => 'Flogging Molly',
            'platznummer' => '1',
            'platzreihe' => '1',
            'datum' => '2018-05-12',
            'uhrzeit' => '19:36:00',
            'preis' => '95.23',

        ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'Paul Kalkbrenner',
            'platznummer' => '15',
            'platzreihe' => '4',
            'datum' => '2019-02-09',
            'uhrzeit' => '20:36:00',
            'preis' => '105.00',

        ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'Eminem',
            'platznummer' => '25',
            'platzreihe' => '3',
            'datum' => '2018-11-02',
            'uhrzeit' => '21:20:00',
            'preis' => '110.95',

        ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'Nas',
            'platznummer' => '3',
            'platzreihe' => '2',
            'datum' => '2019-06-18',
            'uhrzeit' => '22:30:00',
            'preis' => '100.00',

    ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'Rihanna',
            'platznummer' => '23',
            'platzreihe' => '8',
            'datum' => '2019-02-01',
            'uhrzeit' => '22:30:00',
            'preis' => '199.00',

        ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'Florian Silbereisen',
            'platznummer' => '1',
            'platzreihe' => '1',
            'datum' => '2019-01-14',
            'uhrzeit' => '21:30:00',
            'preis' => '82.00',

        ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'The Offspring',
            'platznummer' => '33',
            'platzreihe' => '5',
            'datum' => '2018-12-03',
            'uhrzeit' => '23:00:00',
            'preis' => '65.00',

        ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'Rise Against',
            'platznummer' => '43',
            'platzreihe' => '3',
            'datum' => '2018-09-09',
            'uhrzeit' => '20:15:00',
            'preis' => '73.00',

        ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'Beatsteaks',
            'platznummer' => '31',
            'platzreihe' => '7',
            'datum' => '2019-02-18',
            'uhrzeit' => '20:00:00',
            'preis' => '105.00',

        ]);
        DB::table('tickets')->insert([
            'kuenstler' => 'Bob Marley',
            'platznummer' => '28',
            'platzreihe' => '2',
            'datum' => '2019-08-22',
            'uhrzeit' => '20:30:00',
            'preis' => '120.00',

        ]);
        */
        }
}
