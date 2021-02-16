@extends('layouts.app')
@section('title-entity', 'Gestión Programas')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4 border-bottom pb-3">ACTUALIZAR PROGRAMA</h5>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Nombre Programa</span>
                <input type="text" class="form-control" name="nomPrograma" id="nomPrograma" value="{{ $programas->nomPrograma }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Código Programa</span>
                <input type="text" class="form-control" name="codPrograma" id="codPrograma" value="{{ $programas->codPrograma }}" disabled>
            </div>
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Siglas Programa</span>
                <input type="text" class="form-control" name="siglaPrograma" id="siglaPrograma" value="{{ $programas->siglaPrograma }}" disabled>
            </div>
        </div>
        <div class="align-btn border-top pt-3">
            <a href="{{ route('programas.edit', $programas->codPrograma) }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; EDITAR</a>
            <a href="{{ route('programas.index') }}" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></a>
        </div>
    </div>

@endsection
