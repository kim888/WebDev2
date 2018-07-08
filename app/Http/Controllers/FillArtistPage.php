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
        //Erstellen von artist variable: artist = Objekt aus Datenbank wo der Bandname dem übergebenenen Namen entspricht
        $artist = \App\Artist::whereBandname($name)->first();

        //Variable id = die Id vom artist aus Datenbank
        $id = $artist->id;

        //Variable img = Bild vom Artist aus Datenbank
        $img = $artist->picture;

        //Vsriable für Array namens "info" - in diesem wird der Name und das Bild des Künstlers gespeichert
        $info['bandinfos'] = [$name, $img];
        //eager


        $artist_with_events = \App\Artist::with('events')->where('id', $id)->get();

        //Event infos holen
        $counter=0;
        foreach ($artist_with_events as $curr) {
            foreach ($curr->events as $curr_event) {
                $events['events'][$counter] = array(
                    $curr_event->ort,
                    $curr_event->strasse,
                    $curr_event->hausnummer,
                    $curr_event->land,
                    $curr_event->plz,
                    $curr_event->preis,
                    $curr_event->datum,
                    $curr_event->beginn,
                    $curr_event->plaetze,
                );
                $counter++;
            }
        }

        return view('artist', $info, $events);
    }


}
