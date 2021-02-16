<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasXprogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas_xprogramas', function (Blueprint $table) {
            $table->id();
            //Laves foraneas
            $table->bigInteger('numFichaP')->unsigned();
            $table->bigInteger('codPrograma')->unsigned();

            $table->foreign('numFichaP')->references('numFicha')->on('fichas')->onUpdate('cascade');
            $table->foreign('codPrograma')->references('codPrograma')->on('programas')->onUpdate('cascade');

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
        Schema::dropIfExists('fichas_xprogramas');
    }
}
