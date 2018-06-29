<?php

use Illuminate\Database\Seeder;

class location extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $location1 = new App\Location();
        $location1 -> ort = 'Berlin';
        $location1 -> strasse = 'Berg';
        $location1 -> nummer = '34';
        $location1 -> land = 'Deutschland';
        $location1 -> plz = '95000';
        $location1 -> save();

        /*
        DB::table('locations')->insert([
            'ort' => 'feilitzsch',
            'strasse' => 'berggasse',
            'land' => 'Deutschland',
            'nummer' => '5',
            'plz' => '95044',
        ]);
        DB::table('locations')->insert([
            'ort' => 'München',
            'strasse' => 'Arenastrasse',
            'land' => 'Deutschland',
            'nummer' => '96',
            'plz' => '91673',
        ]);
        DB::table('locations')->insert([
            'ort' => 'Köln',
            'strasse' => 'eventallee',
            'land' => 'Deutschland',
            'nummer' => '1',
            'plz' => '97345',
        ]);
        DB::table('locations')->insert([
            'ort' => 'Hamburg',
            'strasse' => 'Theaterstrasse',
            'land' => 'Deutschland',
            'nummer' => '22',
            'plz' => '92763',
        ]);
        DB::table('locations')->insert([
            'ort' => 'Berlin',
            'strasse' => 'Alte Straße',
            'land' => 'Deutschland',
            'nummer' => '128',
            'plz' => '92728',
        ]);
        DB::table('locations')->insert([
            'ort' => 'Dortmund',
            'strasse' => 'Schloßallee',
            'land' => 'Deutschland',
            'nummer' => '33',
            'plz' => '92623',
        ]);
        DB::table('locations')->insert([
            'ort' => 'Stuttgart',
            'strasse' => 'Nebengasse',
            'land' => 'Deutschland',
            'nummer' => '2',
            'plz' => '95261',
        ]);
        DB::table('locations')->insert([
            'ort' => 'Bremen',
            'strasse' => 'Fischallee',
            'land' => 'Deutschland',
            'nummer' => '132',
            'plz' => '98353',
        ]);
        */

    }
}
