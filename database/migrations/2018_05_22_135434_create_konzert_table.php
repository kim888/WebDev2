<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonzertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konzert', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('beschreibung');
            $table->date('eventdatum');
            $table->date('updatedatum');
            $table->integer('locationId');
            $table->string('kuenstler');
            $table->integer('eventId');
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
        Schema::dropIfExists('konzert');
    }
}
