<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->bigInteger('numFicha')->unsigned();
            $table->primary('numFicha');
            $table->string('estadoFicha', '1');

            //Llaves foraneas
            $table->bigInteger('jornadasId')->unsigned();
            $table->foreign('jornadasId')->references('idJornada')->on('jornadas');

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
        Schema::dropIfExists('fichas');
    }
}
