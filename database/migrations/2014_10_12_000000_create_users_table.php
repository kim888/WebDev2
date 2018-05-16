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
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name')->unique();
            $table->string('lastname',30)->nullable();
            $table->string('surename', 30)->nullable();
            $table->string('city', 30)->nullable();
            $table->string('street', 35)->nullable();
            $table->integer('streetnumber')->nullable();
            $table->integer('zip')->nullable();
            $table->string('country')->nullable();
            $table->integer('telephone')->nullable();
            //$table->date('birthdate');

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
