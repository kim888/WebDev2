<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user1 = new App\User();
        $user1 -> vorname = $faker->firstNameMale;
        $user1 -> nachname = 'testboy';
        //$user1 -> geburtsdatum = '1920-05-03';
        //$user1 -> telefonnummer = '09281444';
        $user1 -> ort = 'feilitzsch';
        $user1 -> strasse = 'Berggasse';
        $user1 -> hausnummer = '22';
        $user1 -> land = 'Deutschland';
        $user1 -> postleitzahl = '95028';
        $user1 -> email = 'tim_gr@web.de';
        $user1 -> password = Hash::make('hallo');
        $user1 -> save();

        $user2 = new App\User();
        $user2 -> vorname = 'Peterzwegat';
        $user2 -> nachname = 'Zwegat';
        //$user2 -> geburtsdatum = '1920-05-03';
        //$user2 -> telefonnummer = '09281444';
        $user2 -> ort = 'hof';
        $user2 -> strasse = 'Hauptstrasse';
        $user2 -> hausnummer = '13';
        $user2 -> land = 'Deutschland';
        $user2 -> postleitzahl = '95028';
        $user2 -> email = 'zwegat@web.de';
        $user2 -> password = Hash::make('hallo');
        $user2 -> save();

        /*
        DB::table('users')->insert([
            'name' => 'testeroni',
            'vorname' => 'testeroni',
            'nachname' => 'testboy',
            'geburtsdatum' => '1920-05-03',
            'telefonnummer' => '09281444',
            'ort' => 'feilitzsch',
            'strasse' => 'Berggasse',
            'hausnummer' => '22',
            'land' => 'Deutschland',
            'postleitzahl' => '444',
            'email' => 'tim_gr@web.de',
            'password' => 'hallo',
        ]);
        DB::table('users')->insert([
            'name' => 'Peterzwegat',
            'vorname' => 'Peter',
            'nachname' => 'Kasper',
            'geburtsdatum' => '1945-05-11',
            'telefonnummer' => '0928143',
            'ort' => 'Hof',
            'strasse' => 'Bahnhofsplatz',
            'hausnummer' => '11',
            'land' => 'Deutschland',
            'postleitzahl' => '95028',
            'email' => 'peter.kasper@web.de',
            'password' => 'ciao115b',
        ]);
        DB::table('users')->insert([
            'name' => 'Hansi',
            'vorname' => 'Hansi',
            'nachname' => 'Hinterseher',
            'geburtsdatum' => '1988-03-23',
            'telefonnummer' => '0928161',
            'ort' => 'München',
            'strasse' => 'lalastrasse',
            'hausnummer' => '122',
            'land' => 'Deutschland',
            'postleitzahl' => '09639',
            'email' => 'hansiboy@web.de',
            'password' => 'hallo7603in',
        ]);
        DB::table('users')->insert([
            'name' => 'Franz',
            'vorname' => 'Franz',
            'nachname' => 'Kirsche',
            'geburtsdatum' => '1991-12-03',
            'telefonnummer' => '09281442',
            'ort' => 'Köln',
            'strasse' => 'Neue Strassee',
            'hausnummer' => '99',
            'land' => 'Deutschland',
            'postleitzahl' => '38563',
            'email' => 'franzkopf@web.de',
            'password' => 'blablubb912',
        ]);
        DB::table('users')->insert([
            'name' => 'Florian',
            'vorname' => 'Florian',
            'nachname' => 'Kieweg',
            'geburtsdatum' => '1992-08-22',
            'telefonnummer' => '092863654',
            'ort' => 'Bamberg',
            'strasse' => 'Ernst-Reuther-Straße',
            'hausnummer' => '21',
            'land' => 'Deutschland',
            'postleitzahl' => '93452',
            'email' => 'Floki12@web.de',
            'password' => 'Flori25',
        ]);
        DB::table('users')->insert([
            'name' => 'Maximilian',
            'vorname' => 'Maximilian',
            'nachname' => 'Hinz',
            'geburtsdatum' => '1985-11-19',
            'telefonnummer' => '09251636',
            'ort' => 'Bremen',
            'strasse' => 'Bahnhofsplatz',
            'hausnummer' => '25',
            'land' => 'Deutschland',
            'postleitzahl' => '96543',
            'email' => 'Maxiboy613@web.de',
            'password' => 'bobobo224',
        ]);
        DB::table('users')->insert([
            'name' => 'Thomas',
            'vorname' => 'Thomas',
            'nachname' => 'Müller',
            'geburtsdatum' => '1987-11-23',
            'telefonnummer' => '092623563',
            'ort' => 'München',
            'strasse' => 'Bauernstraße',
            'hausnummer' => '24',
            'land' => 'Deutschland',
            'postleitzahl' => '96439',
            'email' => 'Thomas.mueller@gmx.de',
            'password' => 'thommmi2224',
        ]);
        DB::table('users')->insert([
            'name' => 'Kim',
            'vorname' => 'Kim',
            'nachname' => 'Schlenzo',
            'geburtsdatum' => '1998-02-03',
            'telefonnummer' => '0926264',
            'ort' => 'Erfurt',
            'strasse' => 'Oststraße',
            'hausnummer' => '73',
            'land' => 'Deutschland',
            'postleitzahl' => '95353',
            'email' => 'Kimbolo@google.de',
            'password' => 'Schlenzoni96',
        ]);
        DB::table('users')->insert([
            'name' => 'Fritz',
            'vorname' => 'Fritz',
            'nachname' => 'Bauer',
            'geburtsdatum' => '1993-10-16',
            'telefonnummer' => '092624346',
            'ort' => 'Stuttgart',
            'strasse' => 'Chausseestraße',
            'hausnummer' => '1',
            'land' => 'Deutschland',
            'postleitzahl' => '97343',
            'email' => 'fritzchen99@web.de',
            'password' => 'ichbinbauer23!',
        ]);
        DB::table('users')->insert([
            'name' => 'Peter',
            'vorname' => 'Peter',
            'nachname' => 'Hahn',
            'geburtsdatum' => '1973-03-29',
            'telefonnummer' => '092643891',
            'ort' => 'Dortmund',
            'strasse' => 'Admiralstraße',
            'hausnummer' => '37',
            'land' => 'Deutschland',
            'postleitzahl' => '91627',
            'email' => 'Hahnenkopf@gmx.de',
            'password' => 'HahnimKorb123',
        ]);*/
    }
}
