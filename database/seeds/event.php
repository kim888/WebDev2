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
        $event2->eventname = 'Flogging Molly Live in München';
        $event2->beschreibung = 'Flogging Molly Live in München';
        $event2->mindestalter = '18';
        $event2->datum = '2018-05-30';
        $event2->beginn = '19:30:00';
        $event2->ort = 'München';
        $event2->strasse = 'BMW Platz';
        $event2->hausnummer = '01';
        $event2->land = 'Deutschland';
        $event2->plz = '08876';
        $event2->preis = '59.99';
        $event2->plaetze = '4000';
        $event2->save();

        $event3 = new App\Event();
        $event3->eventname = 'Flogging Molly Live in Stuttgart';
        $event3->beschreibung = 'Flogging Molly Live in Stuttgart';
        $event3->mindestalter = '18';
        $event3->datum = '2018-06-05';
        $event3->beginn = '19:30:00';
        $event3->ort = 'Stuttgart';
        $event3->strasse = 'Porsche Platz';
        $event3->hausnummer = '01';
        $event3->land = 'Deutschland';
        $event3->plz = '80076';
        $event3->preis = '59.99';
        $event3->plaetze = '3000';
        $event3->save();

    }
}
