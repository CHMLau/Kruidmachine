<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mix', function (Blueprint $table) {
            $table->string('naam');
            $table->string('kruid');
            $table->integer('hoeveelheid');
            $table->string('omschrijving');
            $table->string('gebruikersnaam');

            $table->foreign('kruid')->references('kruid')->on('kruid');
            $table->foreign('gebruikersnaam')->references('gebruikersnaam')->on('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mix');
    }
}
