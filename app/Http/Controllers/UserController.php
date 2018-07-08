<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Auth;

class UserController extends Controller
{
    public function setAll()
    {

        //Auslesen von Variablen für Platzhalter in der ProfilBearbeitenBlade

        //Curr_user durch Email Adresse auslesen
        $curr_user = DB::table('users')->where('email', Auth::user()->email)->get()->first();

        //curr_user wird unter dem Namen 'yolo' weiter an die ProfilBearbeiten gegegeben
        return view('/profilBearbeiten')->with("yolo", $curr_user);
        }

}