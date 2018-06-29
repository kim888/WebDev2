<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eventname');
            $table->text('beschreibung');
            $table->integer('mindestalter');
            $table->date('datum');
            $table->time('beginn');
            $table->string('ort');
            $table->string('strasse');
            $table->integer('hausnummer');
            $table->string('land');
            $table->integer('plz');
            $table->float('preis');
            $table->integer('plaetze');
            $table->timestamps();

        });

        Schema::create('artist_event', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();


            $table->integer('artist_id')->unsigned()->index();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');


            $table->integer('event_id')->unsigned()->index();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
        Schema::dropIfExists('artist_event');
    }

}

