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
    //Variable curr_user erstellen - hier wird der aktuelle User über die email ausgemacht und in curr_user eingespeichert
    $curr_user = \App\User::whereEmail(Auth::user()->email)->first();


        //Vorname des aktuellen Users neu einspeichern
        if($_POST['firstname']!=null)
        {
            $curr_user->vorname =  $_POST['firstname'];
        }


        //Nachname des aktuellen Users neu einspeichern
         if($_POST['lastname']!=null)
        {
            $curr_user->nachname =  $_POST['lastname'];
        }

        //strasse des aktuellen Users neu einspeichern
        if($_POST['strasse']!=null)
        {
            $curr_user->strasse =  $_POST['strasse'];
        }

        //Hausummer des aktuellen Users neu einspeichern
        if($_POST['nummer']!=null)
        {
            $curr_user->hausnummer = $_POST['nummer'];
        }

        //Postleitzahl des aktuellen Users neu einspeichern
         if($_POST['plz']!=null)
        {
            $curr_user->postleitzahl =  $_POST['plz'];
        }

        //Stadtnamen des aktuellen Users neu einspeichern
        if($_POST['stadt']!=null)
        {
            $curr_user->ort =  $_POST['stadt'];
        }



        //curr_user mit neuen Attributen speichern
    $curr_user->save();


        //Zurückkehren zum Profil
    return redirect('/userProfil.html');

}




}