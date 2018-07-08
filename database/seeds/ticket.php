<?php

use Illuminate\Database\Seeder;

class ticket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticket1 = new App\Ticket();
        $ticket1 -> bezahlt = false;
        $ticket1 -> kaufdatum = NOW();
        $ticket1 -> event_id = 1;
        $ticket1 -> save();


        $ticket2 = new App\Ticket();
        $ticket2-> bezahlt = false;
        $ticket2 -> kaufdatum = NOW();
        $ticket2 -> event_id = 2;

        //TODO reference
        $user1 = \App\User::whereId(1)->first();

        $ticket2->user()->associate($user1) -> save();
        $ticket1->user()->associate($user1) -> save();

        /*
        DB::table('tickets')->insert([
            'kuenstler' => 'Flogging Molly',
            'platznummer' => '1',
            'platzreihe' => '1',
            'datum' => '2018-05-12',
            'uhrzeit' => '19:36:00',
            'preis' => '95.23',
        */
        }
}
