<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichas extends Model
{
    use HasFactory;

    protected $table = 'fichas';
    //protected $primaryKey = 'numFicha';
    protected $fillable = [
        'numFicha',
        'estadoFicha',
        'jornadasId'
    ];

    public function scopeAlldates($query)
    {
        return $query
            ->join('jornadas', 'jornadas.idJornada', '=', 'fichas.jornadasId')
            ->join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
            ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
            ->select('fichas.*','jornadas.descJornada', 'programas.nomPrograma')->get();
    }

    public function scopeJornada($query, $jornada)
    {
        if ($jornada)
        {
            return $query
                ->join('jornadas', 'jornadas.idJornada', '=', 'fichas.jornadasId')
                ->join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
                ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
                ->where('fichas.jornadasId', 'like', "$jornada")
                ->select('fichas.*','jornadas.descJornada', 'programas.nomPrograma')->get();
        }
    }

    public function scopeCaracter($query, $caracter)
    {
        if ($caracter)
        {
            return  $query
                ->join('jornadas', 'jornadas.idJornada', '=', 'fichas.jornadasId')
                ->join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
                ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
                ->where('programas.nomPrograma', 'like', "%$caracter%")
                ->select('fichas.*','jornadas.descJornada', 'programas.nomPrograma')->get();
        }
    }

    public function scopeEstado($query, $estado)
    {
        if ($estado)
        {
            return $query
                ->join('jornadas', 'jornadas.idJornada', '=', 'fichas.jornadasId')
                ->join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
                ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
                ->where('fichas.estadoFicha', 'like', "$estado")
                ->select('fichas.*','jornadas.descJornada', 'programas.nomPrograma')->get();
        }
    }

}
