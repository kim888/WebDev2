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
        $bandname = $name;
        $img = DB::table('artists')->where('bandname', $name)-> value('picture');
        $infos['bandinfos'] = [$bandname, $img];

        return view('artist', $infos);
        //return view('artist', ['yolo' => $name]);
    }


}
