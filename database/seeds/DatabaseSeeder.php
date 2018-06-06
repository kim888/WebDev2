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

        $this->call(users::class);
        $this->call(artists::class);
        $this->call(konzert::class);
        $this->call(location::class);
        $this->call(rechnung::class);
        $this->call(ticket::class);
        $this->call(eventsSeeder::class);
    }
}
