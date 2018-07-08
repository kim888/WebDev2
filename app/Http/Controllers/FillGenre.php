<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillGenre extends Controller
{
    public function returnFilledGenre()
    {


        //Erstellen von Variablen bandRock1-bandRock3 = Auslesen von bands wo genrre == ROCK
        ${'bandRock1'}=DB::table('artists')->where('genre', "Rock")->value('bandname');
        ${'bandRock2'}=DB::table('artists')->where('genre', "Rock")->value('bandname');
        ${'bandRock3'}=DB::table('artists')->where('genre', "Rock")->value('bandname');

        //Erstellen von Variable bandPop1 Auslesen von band wo genrre == POP
        ${'bandPop1'}=DB::table('artists')->where('genre', "Pop")->value('bandname');

        //Erstellen von Variable bandIrish1 Auslesen von band wo genrre == IRISH
        ${'bandIrish1'}=DB::table('artists')->where('genre', "Irish")->value('bandname');

        //Erstellen von Variable bandTechno1 Auslesen von band wo genrre == IRISH
        ${'bandTechno1'}=DB::table('artists')->where('genre', "Techno")->value('bandname');

        //Erstellen von Variable bandVolksmusik1 Auslesen von band wo genrre == VOLKSMUSIK
        ${'bandVolksmusik1'}=DB::table('artists')->where('genre', "Volksmusik")->value('bandname');

        //Erstellen von Variable bandReggae1 Auslesen von band wo genrre == REGGAE
        ${'bandReggae1'}=DB::table('artists')->where('genre', "Reggae")->value('bandname');

        //Erstellen von Variablen bandHipHop1, bandHipHop2 = Auslesen von bands wo genrre == HIPHOP
        ${'bandHipHop1'}=DB::table('artists')->where('genre', "HipHop")->value('bandname');
        ${'bandHipHop2'}=DB::table('artists')->where('genre', "HipHop")->value('bandname');



        //dasselbe wie oben nur mit Variablen von den Bildern nicht von Bandnamen

            $rockPics1=DB::table('artists')->where('id', 7)->value('picture');
            $rockPics2=DB::table('artists')->where('id', 8)->value('picture');
            $rockPics3=DB::table('artists')->where('id', 9)->value('picture');

            $popPics1=DB::table('artists')->where('id', 5)->value('picture');

            $irishPics1=DB::table('artists')->where('id', 1)->value('picture');

            $volksmusikPics1=DB::table('artists')->where('id', 6)->value('picture');

            $reggaePics1=DB::table('artists')->where('id', 10)->value('picture');

            $hiphopPics1=DB::table('artists')->where('id', 3)->value('picture');
            $hiphopPics2=DB::table('artists')->where('id', 4)->value('picture');

            $technoPics1=DB::table('artists')->where('id', 2)->value('picture');



            //Rockbildernamen in ein Array einfügen
        $imgNames['rockPics']=[$rockPics1, $rockPics2, $rockPics3];
        //Popbildernamen in ein Array einfügen
        $imgNames['popPics']=[$popPics1];
        //Irishbildernamen in ein Array einfügen
        $imgNames['irishPics']=[$irishPics1];
        //Volksmusikbildernamen in ein Array einfügen
        $imgNames['volksmusikPics']=[$volksmusikPics1];
        //Reggaebildernamen in ein Array einfügen
        $imgNames['reggaePics']=[$reggaePics1];
        //Hiphopbildernamen in ein Array einfügen
        $imgNames['hiphopPics']=[$hiphopPics1, $hiphopPics2];
        //Technobildernamen in ein Array einfügen
        $imgNames['technoPics']=[$technoPics1];

        //Zusammenfügen Bildernamenarrays zu einem großen imgNames Array
        $imgNames['pictures']= [ $imgNames['rockPics'],  $imgNames['popPics'],$imgNames['irishPics'], $imgNames['volksmusikPics'],  $imgNames['reggaePics'],  $imgNames['hiphopPics'], $imgNames['technoPics']];


        //Rockbandnamen in ein Array einfügen
        $data['rock']=[$bandRock1, $bandRock2, $bandRock3];
        //Popbandnamen in ein Array einfügen
        $data['pop']=[$bandPop1];
        //Irishbandnamen in ein Array einfügen
        $data['irish']=[$bandIrish1];
        //Technobandnamen in ein Array einfügen
        $data['techno']=[$bandTechno1];
        //Volksmusikandnamen in ein Array einfügen
        $data['volksmusik']=[$bandVolksmusik1];
        //Reggaebandnamen in ein Array einfügen
        $data['reggae']=[$bandReggae1];
        //Hiphopbandnamen in ein Array einfügen
        $data['hiphop']=[$bandHipHop1, $bandHipHop2];

        //Zusammenfügen Bandnamenarrays zu einem großen data Array
       $data['genre']=['ROCK','POP','IRISH','TECHNO','VOLKSMUSIK', 'REGGAE', 'HIPHOP'];



        return view('genre', $data, $imgNames);







    }
}