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

        $vorname=DB::table('users')->where('name', Auth::user()->name)->value('vorname');
        $nachname = DB::table('users')->where('name', Auth::user()->name)->value('nachname');
        $geburtstag = DB::table('users')->where('name', Auth::user()->name)->value('geburtsdatum');
        $strasse = DB::table('users')->where('name',Auth::user()->name)->value('strasse');
        $hausnummer = DB::table('users')->where('name', Auth::user()->name)->value('hausnummer');
        $ort = DB::table('users')->where('name', Auth::user()->name)->value('ort');
        $telefonnummer = DB::table('users')->where('name', Auth::user()->name)->value('telefonnummer');
        $land = DB::table('users')->where('name', Auth::user()->name)->value('land');
        $postleitzahl = DB::table('users')->where('name', Auth::user()->name)->value('postleitzahl');
        $email = DB::table('users')->where('name', Auth::user()->name)->value('email');
        $passwort = DB::table('users')->where('name', Auth::user()->name)->value('password');



       // $data['bearbeiten'] = [$vorname, $nachname, $geburtstag, $strasse, $hausnummer, $ort, $telefonnummer, $land, $postleitzahl, $email, $passwort];

        $data['yolo'] = [$vorname, $nachname, $geburtstag, $strasse, $hausnummer, $ort, $telefonnummer, $land, $postleitzahl, $email, $passwort];
        return view('profilBearbeiten', $data);
        }

}