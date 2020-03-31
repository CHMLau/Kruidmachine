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
            // $table->integer('comp_nummer')->unique();
            // $table->string('kruid');
            // $table->integer('comp_volheid');
            // $table->boolean('state');

            $table->string('comp1')->nullable();
            $table->string('comp2')->nullable();
            $table->string('comp3')->nullable();
            // $table->string('comp1_kruid')->nullable();
            // $table->string('comp2_kruid')->nullable();
            // $table->string('comp3_kruid')->nullable();
            $table->integer('comp1_volheid')->nullable();
            $table->integer('comp2_volheid')->nullable();
            $table->integer('comp3_volheid')->nullable();

            $table->foreign('comp1')->references('kruid')->on('kruid');
            $table->foreign('comp2')->references('kruid')->on('kruid');
            $table->foreign('comp3')->references('kruid')->on('kruid');
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
