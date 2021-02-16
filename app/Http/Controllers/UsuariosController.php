<?php

namespace App\Http\Controllers;

use App\Models\Fichas;
use App\Models\Perfiles;
use App\Models\Usuarios;
use App\Models\UsuariosXFichas;
use App\Models\UsuariosXPerfiles;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use function GuzzleHttp\Promise\all;

class UsuariosController extends Controller
{
    //
    public function index(){

        $usuarios = Usuarios
            ::join('usuarios_xperfiles', 'usuarios_xperfiles.docUsuarioP', '=', 'usuarios.docUsuario')
            ->join('perfiles', 'perfiles.codPerfil', '=', 'usuarios_xperfiles.codPerfil')
            ->select('usuarios.*','perfiles.*')->get();

        return view('modules.usuarios.index', compact('usuarios'));
    }

    public function create(){

        $usuarios = Usuarios::all();
        $perfiles = Perfiles::all();
        $fichas = Fichas
            ::join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
            ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
            ->select('fichas.*', 'programas.*')->get();

        return view('modules.usuarios.create', compact('usuarios', 'perfiles', 'fichas'));
    }

    public function store(Request $request){

        $request->validate([
            'fotoPerfil' => 'required|image|max:2048',
            'numFicha' => 'required'
        ]);

        $imagen = $request->file('fotoPerfil');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $destino = public_path('img/profile');
        $request->fotoPerfil->move($destino, $nombre);

        Usuarios::create([
            'docUsuario' => request('docUsuario'),
            'nomUsuario' => request('nomUsuario'),
            'apelUsuario' => request('apelUsuario'),
            'correoUsuario' => request('correoUsuario'),
            'fechaNacimiento' => request('fechaNacimiento'),
            'genero' => request('genero'),
            'tipoDocumento' => request('tipoDocumento'),
            'fotoPerfil' => $nombre,
            'estadoUsuario' => request('estadoUsuario'),
        ]);
        UsuariosXPerfiles::create([
            'docUsuarioP' => request('docUsuario'),
            'codPerfil' => request('codPerfil')
        ]);
        UsuariosXFichas::create([
            'numFichaU' => request('numFicha'),
            'docUsuarioF' => request('docUsuario')
        ]);

        return redirect()->route('usuarios.index');
    }

    public function edit($docUsuario){

        $perfiles = Perfiles::all();
        $fichas = Fichas
            ::join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
            ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
            ->select('fichas.*', 'programas.*')->get();
        $usuarios = Usuarios
            ::join('usuarios_xperfiles', 'usuarios_xperfiles.docUsuarioP', '=', 'usuarios.docUsuario')
            ->join('perfiles', 'perfiles.codPerfil', '=', 'usuarios_xperfiles.codPerfil')
            ->join('usuarios_xfichas', 'usuarios_xfichas.docUsuarioF', '=', 'usuarios.docUsuario')
            ->join('fichas', 'fichas.numFicha', '=', 'usuarios_xfichas.numFichaU')
            ->join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
            ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
            ->where('usuarios.docUsuario', '=', $docUsuario)
            ->select('usuarios.*', 'perfiles.*', 'fichas.*', 'programas.*')
            ->first();

        return view('modules.usuarios.edit', compact('usuarios', 'perfiles', 'fichas'));
    }

    public function update(Request $request, $docUsuario){

        $request->validate([
            'fotoPerfil' => 'image|max:2048',
            'numFicha' => 'required'
        ]);

        if ($request->get('fotoPerfil') != null){

            $imagen = $request->file('fotoPerfil');
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img/profile');
            $request->fotoPerfil->move($destino, $nombre);

            $usuarios = Usuarios::where('docUsuario', $docUsuario)->update([
                'docUsuario' => $request->get('docUsuario'),
                'nomUsuario' => $request->get('nomUsuario'),
                'apelUsuario' => $request->get('apelUsuario'),
                'correoUsuario' => $request->get('correoUsuario'),
                'fechaNacimiento' => $request->get('fechaNacimiento'),
                'genero' => $request->get('genero'),
                'tipoDocumento' => $request->get('tipoDocumento'),
                'fotoPerfil' => $nombre,
                'estadoUsuario' => $request->get('estadoUsuario'),
            ]);
            $usuXper = UsuariosXPerfiles::where('docUsuarioP', $docUsuario)->update([
                'docUsuarioP' => request('docUsuario'),
                'codPerfil' => request('codPerfil')
            ]);
            $usuXfich = UsuariosXFichas::where('numFichaU', $request->get('numFicha'))->update([
                'numFichaU' => request('numFicha'),
                'docUsuarioF' => request('docUsuario')
            ]);
        }

        $usuarios = Usuarios::where('docUsuario', $docUsuario)->update([
            'docUsuario' => $request->get('docUsuario'),
            'nomUsuario' => $request->get('nomUsuario'),
            'apelUsuario' => $request->get('apelUsuario'),
            'correoUsuario' => $request->get('correoUsuario'),
            'fechaNacimiento' => $request->get('fechaNacimiento'),
            'genero' => $request->get('genero'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'estadoUsuario' => $request->get('estadoUsuario'),
        ]);
        $usuXper = UsuariosXPerfiles::where('docUsuarioP', $docUsuario)->update([
            'docUsuarioP' => request('docUsuario'),
            'codPerfil' => request('codPerfil')
        ]);
        $usuXfich = UsuariosXFichas::where('numFichaU', $request->get('numFicha'))->update([
            'numFichaU' => request('numFicha'),
            'docUsuarioF' => request('docUsuario')
        ]);

        return redirect()->route('usuarios.show', $request->get('docUsuario'));
    }

    public function show($docUsuario){

        $usuarios = Usuarios
            ::join('usuarios_xperfiles', 'usuarios_xperfiles.docUsuarioP', '=', 'usuarios.docUsuario')
            ->join('perfiles', 'perfiles.codPerfil', '=', 'usuarios_xperfiles.codPerfil')
            ->join('usuarios_xfichas', 'usuarios_xfichas.docUsuarioF', '=', 'usuarios.docUsuario')
            ->join('fichas', 'fichas.numFicha', '=', 'usuarios_xfichas.numFichaU')
            ->join('fichas_xprogramas', 'fichas_xprogramas.numFichaP', '=', 'fichas.numFicha')
            ->join('programas', 'programas.codPrograma', '=', 'fichas_xprogramas.codPrograma')
            ->where('usuarios.docUsuario', '=', $docUsuario)
            ->select('usuarios.*', 'perfiles.*', 'fichas.*', 'programas.*')
            ->first();

        return view('modules.usuarios.show', compact('usuarios'));
    }

    public function delete($docUsuario){

        $usuarios = Usuarios::where('docUsuario', $docUsuario)->delete();

        return redirect()->route('usuarios.index');
    }

}
