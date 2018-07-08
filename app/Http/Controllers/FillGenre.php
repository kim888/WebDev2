<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillGenre extends Controller
{
    public function returnFilledGenre()
    {

        ${'bandRock1'}=DB::table('artists')->where('genre', "Rock")->value('bandname');
        ${'bandRock2'}=DB::table('artists')->where('genre', "Rock")->value('bandname');
        ${'bandRock3'}=DB::table('artists')->where('genre', "Rock")->value('bandname');

        ${'bandPop1'}=DB::table('artists')->where('genre', "Pop")->value('bandname');

        ${'bandIrish1'}=DB::table('artists')->where('genre', "Irish")->value('bandname');

        ${'bandTechno1'}=DB::table('artists')->where('genre', "Techno")->value('bandname');

        ${'bandVolksmusik1'}=DB::table('artists')->where('genre', "Volksmusik")->value('bandname');

        ${'bandReggae1'}=DB::table('artists')->where('genre', "Reggae")->value('bandname');

        ${'bandHipHop1'}=DB::table('artists')->where('genre', "HipHop")->value('bandname');
        ${'bandHipHop2'}=DB::table('artists')->where('genre', "HipHop")->value('bandname');




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





        $imgNames['rockPics']=[$rockPics1, $rockPics2, $rockPics3];
        $imgNames['popPics']=[$popPics1];
        $imgNames['irishPics']=[$irishPics1];
        $imgNames['volksmusikPics']=[$volksmusikPics1];
        $imgNames['reggaePics']=[$reggaePics1];
        $imgNames['hiphopPics']=[$hiphopPics1, $hiphopPics2];
        $imgNames['technoPics']=[$technoPics1];

        $imgNames['pictures']= [ $imgNames['rockPics'],  $imgNames['popPics'],$imgNames['irishPics'], $imgNames['volksmusikPics'],  $imgNames['reggaePics'],  $imgNames['hiphopPics'], $imgNames['technoPics']];


        $data['rock']=[$bandRock1, $bandRock2, $bandRock3];
        $data['pop']=[$bandPop1];
        $data['irish']=[$bandIrish1];
        $data['techno']=[$bandTechno1];
        $data['volksmusik']=[$bandVolksmusik1];
        $data['reggae']=[$bandReggae1];
        $data['hiphop']=[$bandHipHop1, $bandHipHop2];
       $data['genre']=['ROCK','POP','IRISH','TECHNO','VOLKSMUSIK', 'REGGAE', 'HIPHOP'];



        return view('genre', $data, $imgNames);







    }
}