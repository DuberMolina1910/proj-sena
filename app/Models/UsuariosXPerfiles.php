<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosXPerfiles extends Model
{
    use HasFactory;

    protected $table = 'usuarios_xperfiles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'docUsuarioP',
        'codPerfil'
    ];
}
