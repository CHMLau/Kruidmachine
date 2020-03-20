<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKruidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kruid', function (Blueprint $table) {
            $table->string('kruid')->unique();
            $table->integer('comp_nummer');
            //$table->foreign('comp_nummer')->references('comp_nummer')->on('compartiment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kruid');
    }
}
