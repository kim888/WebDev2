<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        For ($i = 1; $i <= 12; $i++) {
            ${'user' . $i} = new App\User();
            ${'user' . $i}->vorname = $faker->firstName;
            ${'user' . $i}->nachname = $faker->lastName;
            ${'user' . $i}->ort = $faker->city;
            ${'user' . $i}->strasse = $faker->streetName;
            ${'user' . $i}->hausnummer = $faker->numberBetween($min = 1, $max = 239);
            ${'user' . $i}->land = $faker->country;
            ${'user' . $i}->postleitzahl = '12345';//$faker->postcode;
            ${'user' . $i}->email = $faker->email;
            ${'user' . $i}->password = Hash::make($faker->password);
            ${'user' . $i}->save();
        }
    }
}