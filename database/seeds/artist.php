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


        $artist1 = new App\Artist();
        $artist1->bandname = 'Flogging Molly';
        $artist1->genre = 'Irish';
        $artist1->picture = 'Flogging_Molly';
        $artist1->save();

        /*'
        DB::table('artists')->insert([
            'bandname' => 'Paul Kalkbrenner',
            'genre' => 'Techno',
            'picture' => 'Paul_Kalkbrenner'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Eminem',
            'genre' => 'Hip Hop',
            'picture' => 'Eminem'

        ]);
        DB::table('artists')->insert([
            'bandname' => 'Nas',
            'genre' => 'Hip Hop',
            'picture' => 'Nas'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Rihanna',
            'genre' => 'Pop',
            'picture' => 'Rihanna'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Florian Silbereisen',
            'genre' => 'Volksmusik',
            'picture' => 'Silbereisen'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'The Offspring',
            'genre' => 'Rock',
            'picture' => 'The_Offspring'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Rise Against',
            'genre' => 'Rock',
            'picture' => 'Rise_Against'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Beatsteaks',
            'genre' => 'Rock',
            'picture' => 'Beatsteaks'
        ]);
        DB::table('artists')->insert([
            'bandname' => 'Bob Marley',
            'genre' => 'Reggae',
            'picture' => 'Bob_Marley'
        ]);*/


    }
}
