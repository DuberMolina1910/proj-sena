<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosXfichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_xfichas', function (Blueprint $table) {
            $table->id();
            //Laves foraneas
            $table->bigInteger('numFichaU')->unsigned();
            $table->bigInteger('docUsuarioF')->unsigned();

            $table->foreign('numFichaU')->references('numFicha')->on('fichas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('docUsuarioF')->references('docUsuario')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('usuarios_xfichas');
    }
}
