<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillHomePage extends Controller
{
    public function returnFilledPage()
    {

        //Erstellen von Variablen: band1, band2, ..., band9
        //Erstellen von Variablen: img1, img2, ..., img9.
        // in diesen Variablen werden die Namen der Bands sowei die Bildnamen der Bands eingespeichert, wo die id dem Laufschleifenindex i entspricht

        For($i=1;$i<=6;$i++) {
            ${'band' . $i}=DB::table('artists')->where('id', $i)->value('bandname');
            ${'img' . $i}=DB::table('artists')->where('id', $i)->value('picture');
        }

        //einzelne Variblen (bands1, ..., bands6) werden in einem Array namens "bands" gespeichert
        $data = [$band1, $band2, $band3, $band4, $band5, $band6];

        //einzelne Variblen (img1, ..., img6) werden in einem Array namens "imgNames" gespeichert
        $imgNames = [$img1, $img2, $img3, $img4, $img5, $img6];




        //Erstellen von Variable popularevents die events einspeichert wo die Anzahl der freien Plätze < 3000 ist
        $popularEvents = DB::table('events')->where('plaetze', '<', 3000)->get();
        $ticker = $popularEvents->pluck('eventname');
        

        return view('test', array('bands' => $data, 'imgNames' => $imgNames, 'ticker' => $ticker));

    }
    public function refreshLiveticker(){
        $almostSold = DB::table('events')->where('plaetze', '<', 3000)->get();
        return $almostSold;
    }
}