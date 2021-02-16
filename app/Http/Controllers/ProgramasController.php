<?php

namespace App\Http\Controllers;

use App\Models\Programas;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProgramasController extends Controller
{
    //
    public function index(){

        $programas = Programas::paginate(5);

        return view('modules.programas.index',compact('programas'));
    }

    public function create(){

        $programas = Programas::all();

        return view('modules.programas.create', compact('programas'));
    }

    public function store(Request $request){

        $programas = Programas::create([
            'codPrograma' => $request->get('codPrograma'),
            'nomPrograma' => mb_strtoupper($request->get('nomPrograma'), 'UTF-8'),
            'siglaPrograma' => mb_strtoupper($request->get('siglaPrograma'), 'UTF-8')
        ]);

        return redirect()->route('programas.index');
    }

    public function edit($codPrograma){

        $programas = Programas::where('codPrograma', $codPrograma)->first();

        return view('modules.programas.edit', compact('programas'));
    }

    public function update(Request $request, $codPrograma){

        $programas = Programas::where('codPrograma', $codPrograma)->update([
            'codPrograma' => $request->get('codPrograma'),
            'nomPrograma' => mb_strtoupper($request->get('nomPrograma'), 'UTF-8'),
            'siglaPrograma' => mb_strtoupper($request->get('siglaPrograma'), 'UTF-8')
        ]);

        return redirect()->route('programas.show', $request->get('codPrograma'));
    }

    public function show($codPrograma){

        $programas = Programas::where('codPrograma', $codPrograma)->first();

        return view('modules.programas.show', compact('programas'));
    }

    public function delete($codPrograma){

        $programas = Programas::where('codPrograma', $codPrograma)->delete();

        return redirect()->route('programas.index');
    }

}
