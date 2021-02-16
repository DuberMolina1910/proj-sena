<?php

namespace App\Http\Controllers;

use App\Models\perfiles;
use Illuminate\Http\Request;

class PerfilesController extends Controller
{
    //
    public function index(){

        $perfiles = perfiles::all();

        return view('modules.perfiles.index', compact('perfiles'));
    }

    public function create(){

        $perfiles = perfiles::all();

        return view('modules.perfiles.create', compact('perfiles'));
    }

    public function store(Request $request){

        perfiles::create([
            'codPerfil' => request('codPerfil'),
            'nomPerfil' => request('nomPerfil')
        ]);

        return redirect()->route('perfiles.index');
    }

    public function edit($codPerfil){

        $perfiles = perfiles::where('codPerfil', $codPerfil)->first();

        return view('modules.perfiles.edit', compact('perfiles'));
    }

    public function update(Request $request, $codPerfil){

        $perfiles = perfiles::where('codPerfil', $codPerfil)->update([
            'codPerfil' => $request->get('codPerfil'),
            'nomPerfil' => $request->get('nomPerfil')
        ]);

        return redirect()->route('perfiles.show', $request->get('codPerfil'));
    }

    public function show($codPerfil){

        $perfiles = perfiles::where('codPerfil', $codPerfil)->first();

        return view('modules.perfiles.show', compact('perfiles'));
    }

    public function delete($codPerfil){

        $perfiles = perfiles::where('codPerfil', $codPerfil)->delete();

        return redirect()->route('perfiles.index');
    }

}
