<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use Auth;

class ProfilBearbeitenController extends Controller
{



    /**
     * @return $this
     */
    public function saveProfile()
{
    DB::table('users')->where('name', Auth::user()->name)->get()->first()->update([
        'vorname'-> $_POST['firstname'],
        'nachname'-> $_POST['lastname'],
        'telefonnummer'-> $_POST['strasse'],
        'ort' -> $_POST['stadt'],
        'strasse' -> $_POST['strasse'],
        'hausnummer' -> $_POST['nummer'],
        'land' -> $_POST['strasse'],
        'postleitzahl' -> $_POST['plz'],
        'email' -> $_POST['email']
    ]);
    Auth::user()->name->get()->first()->save();

    $curr_user = DB::table('users')->where('name', Auth::user()->name)->get()->first();
    return view('profilBearbeiten')->with("yolo", $curr_user);
}




//Daten weerden einzeln aus der profilBearbeiten.blade an diese Controller geschickt und dann neu gesetzt mit den methoden wie im user- anschließend mit user ->save() speichern

}