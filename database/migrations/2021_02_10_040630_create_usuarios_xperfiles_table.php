<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosXperfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_xperfiles', function (Blueprint $table) {
            $table->id();
            //Laves foraneas
            $table->bigInteger('docUsuarioP')->unsigned();
            $table->bigInteger('codPerfil')->unsigned();

            $table->foreign('docUsuarioP')->references('docUsuario')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('codPerfil')->references('codPerfil')->on('perfiles')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('usuarios_xperfiles');
    }
}
