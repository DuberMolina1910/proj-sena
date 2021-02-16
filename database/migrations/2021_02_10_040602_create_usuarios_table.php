<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigInteger('docUsuario')->unsigned();
            $table->primary('docUsuario');
            $table->string('nomUsuario', '45');
            $table->string('apelUsuario', '45');
            $table->string('correoUsuario', '45');
            $table->date('fechaNacimiento');
            $table->string('genero', '25');
            $table->string('tipoDocumento', '45');
            $table->string('fotoPerfil', '50');
            $table->string('estadoUsuario', '1');
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
        Schema::dropIfExists('usuarios');
    }
}
