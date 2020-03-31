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
            $table->string('kruid1')->nullable();
            $table->string('kruid2')->nullable();
            $table->string('kruid3')->nullable();
            $table->string('hoeveelheid1')->nullable();
            $table->string('hoeveelheid2')->nullable();
            $table->string('hoeveelheid3')->nullable();
            $table->string('omschrijving')->nullable();
            $table->string('gebruikersnaam')->default('default');
            $table->string('maken')->default('nee');


            $table->foreign('kruid1')->references('kruid')->on('kruid');
            $table->foreign('kruid2')->references('kruid')->on('kruid');
            $table->foreign('kruid3')->references('kruid')->on('kruid');

            // $table->foreign('gebruikersnaam')->references('gebruikersnaam')->on('account');
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
