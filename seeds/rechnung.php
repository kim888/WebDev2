<?php

use Illuminate\Database\Seeder;

class rechnung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rechnungs')->insert([
            'datum' => '2018-05-14',
            'preis' => '95.23',
            'userId' => '1',
            'ticketId' => '1',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2018-05-15',
            'preis' => '105.00',
            'userId' => '2',
            'ticketId' => '2',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2018-05-19',
            'preis' => '110.95',
            'userId' => '3',
            'ticketId' => '3',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2018-05-30',
            'preis' => '100.00',
            'userId' => '4',
            'ticketId' => '4',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2019-02-01',
            'preis' => '199.00',
            'userId' => '5',
            'ticketId' => '5',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2019-01-14',
            'preis' => '82.00',
            'userId' => '6',
            'ticketId' => '6',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2018-05-30',
            'preis' => '100.00',
            'userId' => '4',
            'ticketId' => '7',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2018-05-30',
            'preis' => '100.00',
            'userId' => '4',
            'ticketId' => '8',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2018-05-30',
            'preis' => '100.00',
            'userId' => '4',
            'ticketId' => '9',
        ]);
        DB::table('rechnungs')->insert([
            'datum' => '2018-05-30',
            'preis' => '100.00',
            'userId' => '4',
            'ticketId' => '10',
        ]);
    }
}
