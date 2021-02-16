<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornadas extends Model
{
    use HasFactory;

    protected $table = 'jornadas';
    //protected $primaryKey = 'idJornada';
    protected $fillable = [
        'idJornada',
        'descJornada'
    ];
}
