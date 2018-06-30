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


        $artist2 = new App\Artist();
        $artist2->bandname = 'Paul Kalkbrenner';
        $artist2->genre = 'Techno';
        $artist2->picture = 'Paul_Kalkbrenner';
        $artist2->save();

        $artist3 = new App\Artist();
        $artist3->bandname = 'Eminem';
        $artist3->genre = 'Hip Hop';
        $artist3->picture = 'Eminem';
        $artist3->save();

        $artist4 = new App\Artist();
        $artist4->bandname = 'Nas';
        $artist4->genre = 'Hip Hop';
        $artist4->picture = 'Nas';
        $artist4->save();

        $artist5 = new App\Artist();
        $artist5->bandname = 'Rihanna';
        $artist5->genre = 'Pop';
        $artist5->picture = 'Rihanna';
        $artist5->save();

        $artist6 = new App\Artist();
        $artist6->bandname = 'Florian Silbereisen';
        $artist6->genre = 'Volksmusik';
        $artist6->picture = 'Florian_Silbereisen';
        $artist6->save();

        $artist7 = new App\Artist();
        $artist7->bandname = 'The Offspring';
        $artist7->genre = 'Rock';
        $artist7->picture = 'The_Offspring';
        $artist7->save();

        $artist8 = new App\Artist();
        $artist8->bandname = 'Rise Against';
        $artist8->genre = 'Rock';
        $artist8->picture = 'Rise_Against';
        $artist8->save();

        $artist9 = new App\Artist();
        $artist9->bandname = 'Beatsteaks';
        $artist9->genre = 'Rock';
        $artist9->picture = 'Beatsteaks';
        $artist9->save();

        $artist10 = new App\Artist();
        $artist10->bandname = 'Bob Marley';
        $artist10->genre = 'Reggae';
        $artist10->picture = 'Bob_Marley';
        $artist10->save();




    }
}
