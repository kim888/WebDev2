<?php

use Illuminate\Database\Seeder;

class konzert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konzert')->insert([
            'name' => 'Tester',
            'beschreibung' => 'testungsbeschreibung weil es spass macht',
            'eventdatum' => '2018-05-12',
            'updatedatum' => '2018-05-12',
            'locationId' => '1',
            'kuenstler' => 'Flogging Molly',
            'eventId' => '1',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Funfest',
            'beschreibung' => 'Funfest ist ein Festival mit vielen supergenialen acts!',
            'eventdatum' => '2018-11-02',
            'updatedatum' => '2018-05-12',
            'locationId' => '2',
            'kuenstler' => 'Eminem',
            'eventId' => '2',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Superkonzi',
            'beschreibung' => 'Erlebt Paul Kalkbrenner live!',
            'eventdatum' => '2019-02-09',
            'updatedatum' => '2018-07-22',
            'locationId' => '3',
            'kuenstler' => 'Paul Kalkbrenner',
            'eventId' => '3',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Abendland',
            'beschreibung' => 'Tanz wie damals im Abendland',
            'eventdatum' => '2019-06-18',
            'updatedatum' => '2018-06-30',
            'locationId' => '4',
            'kuenstler' => 'Nas',
            'eventId' => '4',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Rihannafest',
            'beschreibung' => 'Rihanna und 2 Vorbands',
            'eventdatum' => '2019-02-01',
            'updatedatum' => '2018-06-30',
            'locationId' => '5',
            'kuenstler' => 'Rihanna',
            'eventId' => '5',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Silbi on Tour',
            'beschreibung' => 'Volksmusik vom aller feinsten!',
            'eventdatum' => '2019-01-14',
            'updatedatum' => '2018-06-30',
            'locationId' => '3',
            'kuenstler' => 'Florian Silbereisen',
            'eventId' => '6',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Punk 2 3 4',
            'beschreibung' => 'Offspring und weitere Punkacts',
            'eventdatum' => '2018-12-03',
            'updatedatum' => '2018-06-30',
            'locationId' => '7',
            'kuenstler' => 'The Offspring',
            'eventId' => '7',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Rock from USA',
            'beschreibung' => 'Rockt ab mit Rise Against und vielen mehr!',
            'eventdatum' => '2018-09-09',
            'updatedatum' => '2018-06-30',
            'locationId' => '6',
            'kuenstler' => 'Rise Against',
            'eventId' => '8',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Beaterlebnis',
            'beschreibung' => 'Erlebe Beatsteaks live!',
            'eventdatum' => '2019-02-18',
            'updatedatum' => '2018-06-30',
            'locationId' => '8',
            'kuenstler' => 'Beatsteaks',
            'eventId' => '9',


        ]);
        DB::table('konzert')->insert([
            'name' => 'Reggeatime',
            'beschreibung' => 'Lausche den gemütlichen Klängen des Reggea mit der Legende Bob Marley',
            'eventdatum' => '2019-08-22',
            'updatedatum' => '2018-06-30',
            'locationId' => '6',
            'kuenstler' => 'Bob Marley',
            'eventId' => '10',


        ]);
    }
}
