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

        $curr_user = DB::table('users')->where('name', Auth::user()->name)->get()->first();


//        $data['yolo'] = [$curr_user->vorname, $curr_user->nachname, $curr_user->geburtsdatum, $curr_user->strasse, $curr_user->hausnummer, $curr_user->ort, $curr_user->telefonnummer, $curr_user->land, $curr_user->postleitzahl, $curr_user->email, ""];
        return view('/profilBearbeiten')->with("yolo", $curr_user);
        }

}