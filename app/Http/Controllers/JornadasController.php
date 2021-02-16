<?php

namespace App\Http\Controllers;

use App\Models\Jornadas;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class JornadasController extends Controller
{
    //
    public function index()
    {
        $jornadas = Jornadas::all();
        return view('modules.jornadas.index', compact('jornadas'));
    }
}
