<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillFeaturedPage extends Controller
{
    public function returnFilledPage()
    {

        /*
        $band1 = DB::table('users')->where('id', '1')->value('lastname');
        $band2 = DB::table('users')->where('id', '2')->value('lastname');
        $band3 = DB::table('users')->where('id', '3')->value('lastname');
        $band4 = DB::table('users')->where('id', '4')->value('lastname');
        $band5 = DB::table('users')->where('id', '5')->value('lastname');
        $band6 = DB::table('users')->where('id', '6')->value('lastname');
        */

        For($i=1;$i<=9;$i++) {
            ${'band' . $i}=DB::table('artists')->where('id', $i)->value('bandname');
            ${'img' . $i}=DB::table('artists')->where('id', $i)->value('picture');
        }
        //$band10 = DB::table('artists') -> where('id', 7) -> value('picture');
        //$imgUrl = DB::table('artists') -> where('id', 1) -> value('picture');
        //band ist name der var auf featured.blade.php
        $data['bands'] = [$band1, $band2, $band3, $band4, $band5, $band6, $band7, $band8, $band9];
        $imgNames['imgNames'] = [$img1, $img2, $img3, $img4, $img5, $img6, $img7, $img8, $img9];

        //return view('test', ['band1' => $band1],['band2'=> $band2],['band3'=> $band3],['band4'=> $band4],['band5'=> $band5],['band6'=> $band6]);
        //return view('test')->with('band1',$band1,'band2',$band2);
        return view('featured', $data, $imgNames);

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