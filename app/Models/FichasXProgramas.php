<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichasXProgramas extends Model
{
    use HasFactory;

    protected $table = 'fichas_xprogramas';
    protected $primaryKey = 'id';
    protected $fillable = [
      'numFichaP',
      'codPrograma'
    ];
}
