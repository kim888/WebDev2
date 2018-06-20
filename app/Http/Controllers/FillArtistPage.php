<?php

namespace App\Http\Controllers;

use App\artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FillArtistPage extends Controller
{
    public function index(){

    }

    public function getArtistInfo(String $name)
    {
        //Artist Header füllen
        $bandname = $name;
        $img = DB::table('artists')->where('bandname', $name)-> value('picture');
        $infos['bandinfos'] = [$bandname, $img];

        //Event Dropdown füllen
        //$location = DB::table('artists')->where('bandname', $name)->value('locationId')
        $address = "test";
        $tourname = "test1";
        $location = "berlin123";
        $locationIdFromArtist = DB::table('artists')->where('bandname', $name)->value('locationId');
        $date = DB::table('events')->where('locationId', $locationIdFromArtist)->value('datum');
        $events['events'] = [$location, $date, $address, $tourname];

        return view('artist', $infos, $events);
        //return view('artist', ['yolo' => $name]);
    }


}
