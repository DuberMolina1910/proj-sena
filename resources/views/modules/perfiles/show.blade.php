@extends('layouts.app')
@section('title-entity', 'Gestión Perfiles')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4 border-bottom pb-3">EDITAR DATOS DEL PERFIL</h5>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Código Perfil</span>
                <input type="text" class="form-control" name="codPerfil" id="codPerfil" value="{{ $perfiles->codPerfil }}" disabled>
            </div>
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Nombre del Perfil</span>
                <input type="text" class="form-control" name="nomPerfil" id="nomPerfil" value="{{ $perfiles->nomPerfil }}" disabled>
            </div>
        </div>
        <div class="align-btn border-top pt-3">
            <a href="{{ route('perfiles.edit', $perfiles->codPerfil) }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; EDITAR</a>
            <a href="{{ route('perfiles.index') }}" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></a>
        </div>
    </div>

@endsection
