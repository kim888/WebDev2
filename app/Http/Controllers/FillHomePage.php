<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillHomePage extends Controller
{
    public function returnFilledPage()
    {

        For($i=1;$i<=6;$i++) {
            ${'band' . $i}=DB::table('artists')->where('id', $i)->value('bandname');
            ${'img' . $i}=DB::table('artists')->where('id', $i)->value('picture');
        }
        $data = [$band1, $band2, $band3, $band4, $band5, $band6];
        $imgNames = [$img1, $img2, $img3, $img4, $img5, $img6];




        $popularEvents = DB::table('events')->where('plaetze', '<', 3000)->get();
        $ticker = $popularEvents->pluck('eventname');
        

        return view('test', array('bands' => $data, 'imgNames' => $imgNames, 'ticker' => $ticker));

    }
    public function refreshLiveticker(){
        $almostSold = DB::table('events')->where('plaetze', '<', 3000)->get();
        return $almostSold;
    }
}