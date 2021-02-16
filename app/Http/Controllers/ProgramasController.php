<?php

namespace App\Http\Controllers;

use App\Models\programas;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProgramasController extends Controller
{
    //
    public function index(){

        $programas = programas::paginate(5);

        return view('modules.programas.index',compact('programas'));
    }

    public function create(){

        $programas = programas::all();

        return view('modules.programas.create', compact('programas'));
    }

    public function store(Request $request){

        $programas = programas::create([
            'codPrograma' => $request->get('codPrograma'),
            'nomPrograma' => mb_strtoupper($request->get('nomPrograma'), 'UTF-8'),
            'siglaPrograma' => mb_strtoupper($request->get('siglaPrograma'), 'UTF-8')
        ]);

        return redirect()->route('programas.index');
    }

    public function edit($codPrograma){

        $programas = programas::where('codPrograma', $codPrograma)->first();

        return view('modules.programas.edit', compact('programas'));
    }

    public function update(Request $request, $codPrograma){

        $programas = programas::where('codPrograma', $codPrograma)->update([
            'codPrograma' => $request->get('codPrograma'),
            'nomPrograma' => mb_strtoupper($request->get('nomPrograma'), 'UTF-8'),
            'siglaPrograma' => mb_strtoupper($request->get('siglaPrograma'), 'UTF-8')
        ]);

        return redirect()->route('programas.show', $request->get('codPrograma'));
    }

    public function show($codPrograma){

        $programas = programas::where('codPrograma', $codPrograma)->first();

        return view('modules.programas.show', compact('programas'));
    }

    public function delete($codPrograma){

        $programas = programas::where('codPrograma', $codPrograma)->delete();

        return redirect()->route('programas.index');
    }

}
