<?php

use Illuminate\Database\Seeder;

class artists extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'bandname' => 'Flogging Molly',
            'genre' => 'Irish',
            'locationId' => '1',
            'tourdatum' => '2018-05-12',
            'picture' => 'Flogging_Molly'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Paul Kalkbrenner',
            'genre' => 'Techno',
            'locationId' => '3',
            'tourdatum' => '2019-02-09',
            'picture' => 'Paul_Kalkbrenner'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Eminem',
            'genre' => 'Hip Hop',
            'locationId' => '2',
            'tourdatum' => '2018-11-02',
            'picture' => 'Eminem'

        ]);
        DB::table('artists')->insert([
            'bandname' => 'Nas',
            'genre' => 'Hip Hop',
            'locationId' => '4',
            'tourdatum' => '2019-06-18',
            'picture' => 'Nas'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Rihanna',
            'genre' => 'Pop',
            'locationId' => '5',
            'tourdatum' => '2019-02-01',
            'picture' => 'Rihanna'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Florian Silbereisen',
            'genre' => 'Volksmusik',
            'locationId' => '3',
            'tourdatum' => '2019-01-14',
            'picture' => 'Silbereisen'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'The Offspring',
            'genre' => 'Rock',
            'locationId' => '7',
            'tourdatum' => '2018-12-03',
            'picture' => 'The_Offspring'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Rise Against',
            'genre' => 'Rock',
            'locationId' => '6',
            'tourdatum' => '2018-09-09',
            'picture' => 'Rise_Against'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Beatsteaks',
            'genre' => 'Rock',
            'locationId' => '8',
            'tourdatum' => '2019-02-18',
            'picture' => 'Beatsteaks'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Bob Marley',
            'genre' => 'Reggae',
            'locationId' => '6',
            'tourdatum' => '2019-08-22',
            'picture' => 'Bob_Marley'
        ]);


    }
}
