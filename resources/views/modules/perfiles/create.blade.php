@extends('layouts.app')
@section('title-entity', 'Gestión Perfiles')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4 border-bottom pb-3">CREAR PERFIL</h5>
        <form action="{{ route('perfiles.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Código Perfil</span>
                    <input type="text" class="form-control" name="codPerfil" id="codPerfil">
                </div>
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Nombre del Perfil</span>
                    <input type="text" class="form-control" name="nomPerfil" id="nomPerfil">
                </div>
            </div>
            <div class="align-btn border-top pt-3">
                <a href="{{ route('perfiles.index') }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
                <button type="submit" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
            </div>
        </form>
    </div>

@endsection
