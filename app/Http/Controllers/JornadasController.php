<?php

namespace App\Http\Controllers;

use App\Models\jornadas;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class JornadasController extends Controller
{
    //
    public function index()
    {
        $jornadas = jornadas::all();
        return view('modules.jornadas.index', compact('jornadas'));
    }
}
