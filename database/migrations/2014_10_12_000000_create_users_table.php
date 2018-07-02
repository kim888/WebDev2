<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');

            $table->string('vorname')->nullable();
            $table->string('nachname');
            //$table->date('geburtsdatum');
            $table->string('ort')->nullable();
            $table->string('strasse')->nullable();
            $table->integer('hausnummer')->nullable();
            $table->string('land')->nullable();
            $table->integer('postleitzahl')->nullable();
            //$table->string('picture');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
