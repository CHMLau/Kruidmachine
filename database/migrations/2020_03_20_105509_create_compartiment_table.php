<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompartimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compartiment', function (Blueprint $table) {
            $table->integer('comp_nummer')->unique();
            $table->string('kruid');
            $table->integer('comp_volheid');
            $table->boolean('state');

            $table->foreign('kruid')->references('kruid')->on('kruid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compartiment');
    }
}
