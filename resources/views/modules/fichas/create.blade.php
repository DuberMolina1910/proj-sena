@extends('layouts.app')
@section('title-entity', 'Gestión Fichas')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4 border-bottom pb-3">CREAR FICHA</h5>
        <form action="{{ route('fichas.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número ficha</span>
                    <input type="text" class="form-control" name="numFicha" id="numFicha">
                </div>
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="inputGroup-sizing-default">Estado de ficha</span>
                    <select class="form-select form-control" name="estadoFicha" id="estadoFicha">
                        <option value="">---- Seleccione ----</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="inputGroup-sizing-default">Programa</span>
                    <select class="form-select form-control" name="codPrograma" id="codPrograma">
                        <option value="">---- Seleccione ----</option>
                        @foreach($programas as $pro)
                            <option value="{{ $pro->codPrograma }}">{{ $pro->nomPrograma }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="inputGroup-sizing-default">Jornada ficha</span>
                    <select class="form-select form-control" name="jornadasId" id="jornadasId">
                        <option value="">---- Seleccione ----</option>
                        @foreach($jornadas as $jor)
                            <option value="{{ $jor->idJornada }}">{{ $jor->descJornada }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="align-btn border-top pt-3">
                <a href="{{ route('fichas.index') }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
                <button type="submit" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
            </div>
        </form>
    </div>

@endsection
