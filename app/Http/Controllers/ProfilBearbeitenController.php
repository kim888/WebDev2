<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class ProfilBearbeitenController extends Controller
{



    /**
     * @return $this
     */
    public function saveProfile()
{
//    DB::table('users')->where('name', Auth::user()->name)->get()->first()->update([
//        'vorname'-> $_POST['firstname'],
//        'nachname'-> $_POST['lastname'],
//        'telefonnummer'-> $_POST['strasse'],
//        'ort' -> $_POST['stadt'],
//        'strasse' -> $_POST['strasse'],
//        'hausnummer' -> $_POST['nummer'],
//        'land' -> $_POST['strasse'],
//        'postleitzahl' -> $_POST['plz'],
//        'email' -> $_POST['email']
//    ]);
//    Auth::user()->name->get()->first()->save();

    //$curr_user = DB::table('users')->where('name', Auth::user()->name)->get()->first();
    $curr_user = \App\User::whereName(Auth::user()->name)->first();

    //TODO prüfen, ob wert vorhanden und damit geändert

        if($_POST['firstname']!=null)
        {
            $curr_user->vorname =  $_POST['firstname'];
        }

        if($_POST['lastname']!=null)
        {
            $curr_user->nachname =  $_POST['lastname'];
        }

        if($_POST['strasse']!=null)
        {
            $curr_user->strasse =  $_POST['strasse'];
        }

        if($_POST['nummer']!=null)
        {
            $curr_user->hausnummer = $_POST['nummer'];
        }

        if($_POST['plz']!=null)
        {
            $curr_user->postleitzahl =  $_POST['plz'];
        }

        if($_POST['stadt']!=null)
        {
            $curr_user->ort =  $_POST['stadt'];
        }



    $curr_user->save();



    return redirect('/userProfil.html');

}




}