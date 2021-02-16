@extends('layouts.app')
@section('title-entity', 'Gestión Fichas')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4 border-bottom pb-3">CONFIRMAR ACTUALIZACIÓN</h5>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Número ficha</span>
                <input type="text" class="form-control" name="numFicha" id="numFicha" value="{{ $fichas->numFicha }}" disabled>
            </div>
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Estado de ficha</span>
                @if($fichas->estadoFicha == 1)
                    <input type="text" class="form-control" name="codPrograma" id="codPrograma" value="Activo" disabled>
                @else
                    <input type="text" class="form-control" name="codPrograma" id="codPrograma" value="Inactivo" disabled>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Programa</span>
                <input type="text" class="form-control" name="codPrograma" id="codPrograma" value="{{ $fichas->nomPrograma }}" disabled>
            </div>
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Jornada ficha</span>
                <input type="text" class="form-control" name="codPrograma" id="codPrograma" value="{{ $fichas->descJornada }}" disabled>
            </div>
        </div>
        <div class="align-btn border-top pt-3">
            <a href="{{ route('fichas.edit', $fichas->numFicha) }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; EDITAR</a>
            <a href="{{ route('fichas.index') }}" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></a>
        </div>
    </div>

@endsection
