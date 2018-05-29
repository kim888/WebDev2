<?php

use Illuminate\Database\Seeder;

class artist extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artist')->insert([
            'bandname' => 'Flogging Molly',
            'genre' => 'Irish',
            'locationId' => '1',
            'tourdatum' => '2018-05-12',
            'picture' => 'database/picture/Flogging_Molly.jpg'
        ]);
        DB::table('artist')->insert([
            'bandname' => 'Paul Kalkbrenner',
            'genre' => 'Techno',
            'locationId' => '3',
            'tourdatum' => '2019-02-09',
            'picture' => 'database/picture/Paul_Kalkbrenner.jpg'
        ]);
        DB::table('artist')->insert([
            'bandname' => 'Eminem',
            'genre' => 'Hip Hop',
            'locationId' => '2',
            'tourdatum' => '2018-11-02',
            'picture' => 'database/picture/Eminem.jpg'

        ]);
        DB::table('artist')->insert([
            'bandname' => 'Nas',
            'genre' => 'Hip Hop',
            'locationId' => '4',
            'tourdatum' => '2019-06-18',
            'picture' => 'database/picture/Nas.jpg'
        ]);
        DB::table('artist')->insert([
            'bandname' => 'Rihanna',
            'genre' => 'Pop',
            'locationId' => '5',
            'tourdatum' => '2019-02-01',
            'picture' => 'database/picture/Rihanna.jpg'
        ]);
        DB::table('artist')->insert([
            'bandname' => 'Florian Silbereisen',
            'genre' => 'Volksmusik',
            'locationId' => '3',
            'tourdatum' => '2019-01-14',
            'picture' => 'database/picture/Silbereisen.jpg'
        ]);
        DB::table('artist')->insert([
            'bandname' => 'The Offspring',
            'genre' => 'Rock',
            'locationId' => '7',
            'tourdatum' => '2018-12-03',
            'picture' => 'database/picture/Offspring.jpg'
        ]);
        DB::table('artist')->insert([
            'bandname' => 'Rise Against',
            'genre' => 'Rock',
            'locationId' => '6',
            'tourdatum' => '2018-09-09',
            'picture' => 'database/picture/Rise_Against.jpg'
        ]);
        DB::table('artist')->insert([
            'bandname' => 'Beatsteaks',
            'genre' => 'Rock',
            'locationId' => '8',
            'tourdatum' => '2019-02-18',
            'picture' => 'database/picture/Beatsteaks.jpg'
        ]);
        DB::table('artist')->insert([
            'bandname' => 'Bob Marley',
            'genre' => 'Reggae',
            'locationId' => '6',
            'tourdatum' => '2019-08-22',
            'picture' => 'database/picture/Bob_Marley.jpg'
        ]);


    }
}
