<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //ruft alle notwendigen seeder in der richtigen reihenfolge auf
        $this->call(users::class);
        $this->call(artist::class);
        $this->call(event::class);
        $this->call(ticket::class);
        $this->call(artist_event::class);
    }
}
