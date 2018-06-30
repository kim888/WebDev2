<?php

use Illuminate\Database\Seeder;

class event extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event1 = new App\Event();
        $event1->eventname = 'Flogging Molly Live im Olympiastadion';
        $event1->beschreibung = 'Flogging Molly Live in Berlin';
        $event1->mindestalter = '18';
        $event1->datum = '2018-05-12';
        $event1->beginn = '19:25:00';
        $event1->ort = 'Berlin';
        $event1->strasse = 'Potsdamer Platz';
        $event1->hausnummer = '56';
        $event1->land = 'Deutschland';
        $event1->plz = '09876';
        $event1->preis = '59.99';
        $event1->plaetze = '5000';
        $event1->save();


        $event2 = new App\Event();
        $event2->eventname = 'Funfest';
        $event2->beschreibung = 'The Offspring Live in München';
        $event2->mindestalter = '18';
        $event2->datum = '2018-11-02';
        $event2->beginn = '21:30:00';
        $event2->ort = 'München';
        $event2->strasse = 'BMW Platz';
        $event2->hausnummer = '01';
        $event2->land = 'Deutschland';
        $event2->plz = '08876';
        $event2->preis = '63.99';
        $event2->plaetze = '4000';
        $event2->save();

        $event3 = new App\Event();
        $event3->eventname = 'Abendland';
        $event3->beschreibung = 'Paul Kalkbrenner Live in Stuttgart';
        $event3->mindestalter = '16';
        $event3->datum = '2018-06-05';
        $event3->beginn = '20:30:00';
        $event3->ort = 'Stuttgart';
        $event3->strasse = 'Porsche Platz';
        $event3->hausnummer = '01';
        $event3->land = 'Deutschland';
        $event3->plz = '80076';
        $event3->preis = '83.99';
        $event3->plaetze = '3000';
        $event3->save();

        $event4 = new App\Event();
        $event4->eventname = 'Rihannafest';
        $event4->beschreibung = 'Rihanna Molly Live in Köln';
        $event4->mindestalter = '12';
        $event4->datum = '2018-06-23';
        $event4->beginn = '22:30:00';
        $event4->ort = 'Köln';
        $event4->strasse = 'Domplatz';
        $event4->hausnummer = '34';
        $event4->land = 'Deutschland';
        $event4->plz = '85464';
        $event4->preis = '110.99';
        $event4->plaetze = '7000';
        $event4->save();

        $event5 = new App\Event();
        $event5->eventname = 'Silbi on Tour';
        $event5->beschreibung = 'Florian Silbereisen Live in Bonn';
        $event5->mindestalter = '0';
        $event5->datum = '2018-08-03';
        $event5->beginn = '16:30:00';
        $event5->ort = 'Bonn';
        $event5->strasse = 'Bonner Platz';
        $event5->hausnummer = '07';
        $event5->land = 'Deutschland';
        $event5->plz = '83456';
        $event5->preis = '70.99';
        $event5->plaetze = '5700';
        $event5->save();

        $event6 = new App\Event();
        $event6->eventname = 'Beaterlebnis';
        $event6->beschreibung = 'Beatsteaks live in Dortmund';
        $event6->mindestalter = '12';
        $event6->datum = '2018-09-14';
        $event6->beginn = '19:00:00';
        $event6->ort = 'Dortmund';
        $event6->strasse = 'Stadion Straße';
        $event6->hausnummer = '87';
        $event6->land = 'Deutschland';
        $event6->plz = '86456';
        $event6->preis = '46.99';
        $event6->plaetze = '2400';
        $event6->save();

        $event7 = new App\Event();
        $event7->eventname = 'Reggeatime';
        $event7->beschreibung = 'Bob Marley live in Regensburg';
        $event7->mindestalter = '18';
        $event7->datum = '2018-11-32';
        $event7->beginn = '21:15:00';
        $event7->ort = 'Regensburg';
        $event7->strasse = 'Domstraße';
        $event7->hausnummer = '142';
        $event7->land = 'Deutschland';
        $event7->plz = '93451';
        $event7->preis = '89.99';
        $event7->plaetze = '5380';
        $event7->save();

        $event8 = new App\Event();
        $event8->eventname = 'Rock from USA';
        $event8->beschreibung = 'Rise Against live in Hamburg';
        $event8->mindestalter = '16';
        $event8->datum = '2018-08-25';
        $event8->beginn = '21:00:00';
        $event8->ort = 'Hamburg';
        $event8->strasse = 'Fischallee';
        $event8->hausnummer = '37';
        $event8->land = 'Deutschland';
        $event8->plz = '96082';
        $event8->preis = '37.00';
        $event8->plaetze = '2000';
        $event8->save();

        $event9 = new App\Event();
        $event9->eventname = 'The Eminem Show';
        $event9->beschreibung = 'Eminem & Nas live in Freiburg';
        $event9->mindestalter = '18';
        $event9->datum = '2018-11-05';
        $event9->beginn = '20:45:00';
        $event9->ort = 'Freiburg';
        $event9->strasse = 'Lange Straße';
        $event9->hausnummer = '231';
        $event9->land = 'Deutschland';
        $event9->plz = '74349';
        $event9->preis = '95.99';
        $event9->plaetze = '8400';
        $event9->save();

        $event10 = new App\Event();
        $event10->eventname = 'Nas live in Frankfurt';
        $event10->beschreibung = 'Nas & Eminem live in Frankfurt';
        $event10->mindestalter = '18';
        $event10->datum = '2018-07-29';
        $event10->beginn = '22:30:00';
        $event10->ort = 'Frankfurt';
        $event10->strasse = 'Bänkerplatz';
        $event10->hausnummer = '52';
        $event10->land = 'Deutschland';
        $event10->plz = '63248';
        $event10->preis = '75.99';
        $event10->plaetze = '3600';
        $event10->save();


    }
}
