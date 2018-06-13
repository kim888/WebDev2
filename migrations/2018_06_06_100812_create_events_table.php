<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->timestamps();

            $table->date('datum');
            $table->time('beginn');
            $table->integer('locationId');
        });

        Schema::create('artist_event', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('artist_id')->unsigned()->index();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');

            $table->integer('location_id')->unsigned()->index();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
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
        Schema::dropIfExists('artists');
    }
}
