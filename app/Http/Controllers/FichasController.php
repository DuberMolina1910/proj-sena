<?php

namespace App\Http\Controllers;

use App\Models\Fichas;
use App\Models\FichasXProgramas;
use App\Models\Jornadas;
use App\Models\Programas;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class FichasController extends Controller
{
    //
    public function index(Request $request){

        $jornadas = Jornadas::all();

        $ficha = Fichas::alldates();

        if ($request) {

            $jornada = $request->get('jornadasId');
            $caracter = $request->get('searchChar');
            $estado = $request->get('estadoFicha');

            if ($jornada){
                $ficha = Fichas::jornada($jornada);

                return view('modules.fichas.index', compact('ficha', 'jornadas'));
            }
            else if ($caracter){
                $ficha = Fichas::caracter($caracter);

                return view('modules.fichas.index', compact('ficha', 'jornadas'));
            }
            else if ($estado){
                $ficha = Fichas::estado($estado);

                return view('modules.fichas.index', compact('ficha', 'jornadas'));
            }
        }

        return view('modules.fichas.index', compact('ficha', 'jornadas'));
    }

    public function create(){

        $fichas = Fichas::all();
        $jornadas = Jornadas::all();
        $programas = Programas::all();

        return view('modules.fichas.create', compact('fichas', 'jornadas', 'programas'));
    }

    public function store(Request $request){

        Fichas::create([
            'numFicha' => request('numFicha'),
            'estadoFicha' => request('estadoFicha'),
            'jornadasId' => request('jornadasId')
        ]);
        FichasXProgramas::create([
            'numFichaP' => request('numFicha'),
            'codPrograma' => request('codPrograma')
        ]);

        return redirect()->route('fichas.index');
    }

    public function edit($numFicha){

        $fichas = Fichas
            ::join('jornadas', 'jornadas.idJornada', '=', 'fichas.jornadasId')
            ->join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
            ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
            ->where('fichas.numFicha', '=', $numFicha)
            ->select('fichas.*','jornadas.descJornada', 'programas.nomPrograma', 'programas.codPrograma')
            ->first();
        $jornadas = Jornadas::all();
        $programas = Programas::all();

        return view('modules.fichas.edit', compact('fichas', 'jornadas', 'programas'));
    }

    public function update(Request $request, $numFicha){

        $fichas = Fichas::where('numFicha', $numFicha)->update([
            'numFicha' => $request->get('numFicha'),
            'estadoFicha' => $request->get('estadoFicha'),
            'jornadasId' => $request->get('jornadasId')
        ]);
        $fi_pro = FichasXProgramas::where('numFichaP', $numFicha)->update([
            'numFichaP' => $request->get('numFicha'),
            'codPrograma' => $request->get('codPrograma')
        ]);

        return redirect()->route('fichas.show', $request->get('numFicha'));
    }

    public function show($numFicha){

        $fichas = Fichas
            ::join('jornadas', 'jornadas.idJornada', '=', 'fichas.jornadasId')
            ->join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
            ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
            ->where('fichas.numFicha', '=', $numFicha)
            ->select('fichas.*','jornadas.descJornada', 'programas.nomPrograma')
            ->first();

        return view('modules.fichas.show',compact('fichas'));
    }
}
