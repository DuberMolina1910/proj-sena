<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    //protected $primaryKey = 'docUsuario';
    protected $fillable = [
        'docUsuario',
        'nomUsuario',
        'apelUsuario',
        'correoUsuario',
        'fechaNacimiento',
        'genero',
        'tipoDocumento',
        'fotoPerfil',
        'estadoUsuario'
    ];

    /*protected $generos = [
        'Masculino',
        'Femenino'
    ];

    protected $tdocumento = [
        'Cédula de Ciudadanía',
        'NIT',
        'Cédula de Extranjería',
        'Pasaporte',
        'NUIP',
        'Identificación de Extranjeros',
        'PEP'
    ];*/
}
