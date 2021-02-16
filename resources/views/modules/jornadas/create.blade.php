@extends('layouts.app')
@section('title-entity', 'Gestión Jornadas')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4">CREAR JORNADA</h5>
        <div class="input-group mb-4">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre Jornada</span>
            <input type="text" class="form-control" aria-label="">
        </div>
        <div class="align-btn">
            <a href="{{ route('jornadas.index') }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
            <button type="submit" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
        </div>
    </div>

@endsection
