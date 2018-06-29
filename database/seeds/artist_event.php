<?php

use Illuminate\Database\Seeder;

class artist_event extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   /*
        DB::table('artist_event')->insert([
            'artist_id' => '1',
            'event_id' => '1',
        ]);
        DB::table('artist_event')->insert([
            'artist_id' => '1',
            'event_id' => '2',
        ]);*/


        //TODO reference
        $artist1= \App\Artist::whereId(1)->first();
        $event1 = \App\Event::whereId(1)->first();
        $event2 = \App\Event::whereId(2)->first();
        dump('verbinden');
        $artist1->events()->attach($event1);
        $artist1->events()->attach($event2);
        //$event1->artists()->attach($artist1);
    }
}
