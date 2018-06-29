<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillGenre extends Controller
{
    public function returnFilledGenre()
    {

        ${'bandRock1'}=DB::table('artists')->where('id', 7)->value('bandname');
        ${'bandRock2'}=DB::table('artists')->where('id', 8)->value('bandname');
        ${'bandRock3'}=DB::table('artists')->where('id', 9)->value('bandname');

        ${'bandPop1'}=DB::table('artists')->where('id', 5)->value('bandname');

        ${'bandIrish1'}=DB::table('artists')->where('id', 1)->value('bandname');

        ${'bandTechno1'}=DB::table('artists')->where('id', 2)->value('bandname');

        ${'bandVolksmusik1'}=DB::table('artists')->where('id', 6)->value('bandname');

        ${'bandReggae1'}=DB::table('artists')->where('id', 10)->value('bandname');

        ${'bandHipHop1'}=DB::table('artists')->where('id', 3)->value('bandname');
        ${'bandHipHop2'}=DB::table('artists')->where('id', 4)->value('bandname');



        $data['rock']=[$bandRock1, $bandRock2, $bandRock3];
        $data['pop']=[$bandPop1];
        $data['irish']=[$bandIrish1];
        $data['techno']=[$bandTechno1];
        $data['volksmusik']=[$bandVolksmusik1];
        $data['reggae']=[$bandReggae1];
        $data['hiphop']=[$bandHipHop1, $bandHipHop2];






            /*
                        ${'hiphopBild' . $i}=DB::table('artists')->where('genre','Hip Hop')->where('id', $i)->value('picture');
                        ${'rockBild' . $i}=DB::table('artists')->where('genre', 'Rock')->where('id', $i)->value('picture');
                        ${'popBild' . $i}=DB::table('artists')->where('genre','Pop')->where('id', $i)->value('picture');
                        ${'technoBild' . $i}=DB::table('artists')->where('genre', 'Techno')->where('id', $i)->value('picture');
                        ${'volksmusikBild' . $i}=DB::table('artists')->where('genre','Volksmusik')->where('id', $i)->value('picture');
                        ${'irishBild' . $i}=DB::table('artists')->where('genre','Irish')->where('id', $i)->value('picture');
                        ${'reggaeBild' . $i}=DB::table('artists')->where('genre', 'Reggae')->where('id', $i)->value('picture');


                        ${'hiphop' . $i}=DB::table('artists')->where('genre','Hip Hop')->where('id', $i)->value('bandname');
                        ${'rock' . $i}=DB::table('artists')->where('genre', 'Rock')->where('id', $i)->value('bandname');
                        ${'pop' . $i}=DB::table('artists')->where('genre','Pop')->where('id', $i)->value('bandname');
                        ${'techno' . $i}=DB::table('artists')->where('genre', 'Techno')->where('id', $i)->value('bandname');
                        ${'volksmusik' . $i}=DB::table('artists')->where('genre','Volksmusik')->where('id', $i)->value('bandname');
                        ${'irish' . $i}=DB::table('artists')->where('genre','Irish')->where('id', $i)->value('bandname');
                        ${'reggae' . $i}=DB::table('artists')->where('genre', 'Reggae')->where('id', $i)->value('bandname');

                        ${'img' . $i}=DB::table('artists')->where('id', $i)->value('picture');
            */

        //$band10 = DB::table('artists') -> where('id', 7) -> value('picture');
        //$imgUrl = DB::table('artists') -> where('id', 1) -> value('picture');
        //band ist name der var auf featured.blade.php



        //return view('test', ['band1' => $band1],['band2'=> $band2],['band3'=> $band3],['band4'=> $band4],['band5'=> $band5],['band6'=> $band6]);
        //return view('test')->with('band1',$band1,'band2',$band2);
        return view('genre', $data);

        /* For Schleife und Array das übergeben werden sollte
        for ($x = 1; $x <= 6; $x++) {
            $user= DB::table('users')->where('id', $x)->value('lastname');


            error_log("variable x ist: ".$x);
            $data = array(
                'band1' => 'band1',
                'band2' => 'band2',
                'band3' => 'band3',
                'band4' => 'band4',
                'band5' => 'band5',
                'band6' => 'band6'
            );
            //return view('test', ["user".$x => $user]);
        }
        //return view('test')->with('data',$data);
        */
    }
}