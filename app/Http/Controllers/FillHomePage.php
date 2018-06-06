<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillHomePage extends Controller
{
    public function returnFilledPage()
    {

        $band1 = DB::table('artists')->where('id', '1')->value('bandname');
        $band2 = DB::table('artists')->where('id', '2')->value('bandname');
        $band3 = DB::table('artists')->where('id', '3')->value('bandname');
        $band4 = DB::table('artists')->where('id', '4')->value('bandname');
        $band5 = DB::table('artists')->where('id', '5')->value('bandname');
        $band6 = DB::table('artists')->where('id', '6')->value('bandname');
        error_log($band1." ".$band2." ".$band3);
        //return view('test', ['band1' => $band1],['band2'=> $band2],['band3'=> $band3],['band4'=> $band4],['band5'=> $band5],['band6'=> $band6]);
        //return view('test')->with('band1',$band1,'band2',$band2);

        $data['users'] = [$band1, $band2, $band3, $band4, $band5, $band6];

        return view('test', $data);

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