<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillFeaturedPage extends Controller
{


    public function returnFilledPage()
    {


        For($i=1;$i<=9;$i++) {
            //Erstellen von Variablen: band1, band2, ..., bannd9.
            // in diesen Variablen werden die Namen der Bands eingespeichert, wo die id de, Laufschleifenindex i entspricht
            ${'band' . $i}=DB::table('artists')->where('id', $i)->value('bandname');

            //Erstellen von Variablen: img1, img2, ..., img9.
            // in diesen Variablen werden die Namen der Bilder der Bands eingespeichert, wo die id de, Laufschleifenindex i entspricht
            ${'img' . $i}=DB::table('artists')->where('id', $i)->value('picture');
        }

        //einzelne Variblen (bands1, ..., bands9) werden in einem Array names "bands" gespeichert
        $data['bands'] = [$band1, $band2, $band3, $band4, $band5, $band6, $band7, $band8, $band9];

        //einzelne Variblen (img1, ..., img9) werden in einem Array names "imgNames" gespeichert
        $imgNames['imgNames'] = [$img1, $img2, $img3, $img4, $img5, $img6, $img7, $img8, $img9];


        return view('featured', $data, $imgNames);


    }
}