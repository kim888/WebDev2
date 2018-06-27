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

    //TODO prüfen, ob wert vorhanden und dmait geändert
//    $curr_user->vorname =  $_POST['firstname'];
//    $curr_user->nachname =  $_POST['lastname'];
//    $curr_user->strasse =  $_POST['strasse'];
//    $curr_user->hausnummer = $_POST['nummer'];
//    $curr_user->postleitzahl =  $_POST['plz'];
    $curr_user->ort =  $_POST['stadt'];


    $curr_user->save();


    //return view('profilBearbeiten')->with("yolo", $curr_user);

    return redirect('/userProfil.html');
}




//Daten weerden einzeln aus der profilBearbeiten.blade an diese Controller geschickt und dann neu gesetzt mit den methoden wie im user- anschließend mit user ->save() speichern

}