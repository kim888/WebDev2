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
        $artist1->events()->attach($event1);

        //$event1->artists()->attach($artist1);

        $artist2= \App\Artist::whereId(2)->first();
        $event3 = \App\Event::whereId(3)->first();
        $artist2->events()->attach($event3);

        $artist3= \App\Artist::whereId(3)->first();
        $event9 = \App\Event::whereId(9)->first();
        $event10 = \App\Event::whereId(10)->first();
        $artist3->events()->attach($event9);
        $artist3->events()->attach($event10);

        $artist4= \App\Artist::whereId(4)->first();
        $event9 = \App\Event::whereId(9)->first();
        $event10 = \App\Event::whereId(10)->first();
        $artist4->events()->attach($event9);
        $artist4->events()->attach($event10);

        $artist5= \App\Artist::whereId(5)->first();
        $event4 = \App\Event::whereId(4)->first();
        $artist5->events()->attach($event4);

        $artist6= \App\Artist::whereId(6)->first();
        $event5 = \App\Event::whereId(5)->first();
        $artist6->events()->attach($event5);

        $artist7= \App\Artist::whereId(7)->first();
        $event2 = \App\Event::whereId(2)->first();
        $event8 = \App\Event::whereId(8)->first();
        $event6 = \App\Event::whereId(6)->first();
        $artist7->events()->attach($event2);
        $artist7->events()->attach($event8);
        $artist7->events()->attach($event6);

        $artist8= \App\Artist::whereId(8)->first();
        $event2 = \App\Event::whereId(2)->first();
        $event8 = \App\Event::whereId(8)->first();
        $event6 = \App\Event::whereId(6)->first();
        $artist8->events()->attach($event2);
        $artist8->events()->attach($event8);
        $artist8->events()->attach($event6);

        $artist9= \App\Artist::whereId(9)->first();
        $event2 = \App\Event::whereId(2)->first();
        $event8 = \App\Event::whereId(8)->first();
        $event6 = \App\Event::whereId(6)->first();
        $artist9->events()->attach($event2);
        $artist9->events()->attach($event8);
        $artist9->events()->attach($event6);

        $artist10= \App\Artist::whereId(10)->first();
        $event7 = \App\Event::whereId(7)->first();
        $artist10->events()->attach($event7);


    }
}
