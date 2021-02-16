<?php

namespace App\Http\Controllers;

use App\Models\Perfiles;
use Illuminate\Http\Request;

class PerfilesController extends Controller
{
    //
    public function index(){

        $perfiles = Perfiles::all();

        return view('modules.perfiles.index', compact('perfiles'));
    }

    public function create(){

        $perfiles = Perfiles::all();

        return view('modules.perfiles.create', compact('perfiles'));
    }

    public function store(Request $request){

        Perfiles::create([
            'codPerfil' => request('codPerfil'),
            'nomPerfil' => request('nomPerfil')
        ]);

        return redirect()->route('perfiles.index');
    }

    public function edit($codPerfil){

        $perfiles = Perfiles::where('codPerfil', $codPerfil)->first();

        return view('modules.perfiles.edit', compact('perfiles'));
    }

    public function update(Request $request, $codPerfil){

        $perfiles = Perfiles::where('codPerfil', $codPerfil)->update([
            'codPerfil' => $request->get('codPerfil'),
            'nomPerfil' => $request->get('nomPerfil')
        ]);

        return redirect()->route('perfiles.show', $request->get('codPerfil'));
    }

    public function show($codPerfil){

        $perfiles = Perfiles::where('codPerfil', $codPerfil)->first();

        return view('modules.perfiles.show', compact('perfiles'));
    }

    public function delete($codPerfil){

        $perfiles = Perfiles::where('codPerfil', $codPerfil)->delete();

        return redirect()->route('perfiles.index');
    }

}
