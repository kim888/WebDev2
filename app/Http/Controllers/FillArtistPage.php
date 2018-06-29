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
        //lazy
        /*
        $artist = \App\Artist::whereBandname($name)->first();
        $id = $artist->id;
        //dump($id);

        //$events = \App\Artist::with('event')->where('id', $id)->get();
        $events = \App\Artist::whereId($id)->first()->events;
        //dump($events);

        foreach ($events as $event){

            $event->beschreibung;

        }*/
        $location = "Test_Berlin";
        //dump($location);

        $bandname = $name;
        //$img = $artist->picture;
        $img = "Flogging_Molly";
        $info['bandinfos'] = [$bandname, $img];
        $date = "678";
        $address = "fjksflad";
        $tourname = "jfjfjfjf";
        $events['events'] = [$location, $date, $address, $tourname];

        return view('artist', $info, $events);

        /*
        ####################
        #Alter Code
        ###################
        //Artist Header füllen
        $bandname = $name;
        $img = DB::table('artists')->where('bandname', $name)-> value('picture');
        $infos['bandinfos'] = [$bandname, $img];

        //Event Dropdown füllen
        //$location = DB::table('artists')->where('bandname', $name)->value('locationId')
        $address = "test";
        $tourname = "test1";
        $location = DB::table('locations')->where('id',2)->value('ort');
        $locationIdFromArtist = DB::table('artists')->where('bandname', $name)->value('locationId');
        $date = DB::table('events')->where('locationId', $locationIdFromArtist)->value('datum');
        $events['events'] = [$location, $date, $address, $tourname];

        return view('artist', $infos, $events);
        //return view('artist', ['yolo' => $name]);
        ###################
        */
    }


}
