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
            $table->string('comp_kruid')->nullable();
            $table->integer('comp_volheid')->default(0)->nullable();

            $table->foreign('comp_kruid')->references('kruid')->on('kruid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compartiment', function(Blueprint $table){
          $table->dropForeign('mixDB_compartiment_foreign');
        });
        Schema::dropIfExists('compartiment');
    }
}
