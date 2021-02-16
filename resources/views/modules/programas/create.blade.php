@extends('layouts.app')
@section('title-entity', 'Gestión Programas')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4 border-bottom pb-3">CREAR PROGRAMA</h5>
        <form action="{{ route('programas.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre Programa</span>
                    <input type="text" class="form-control" name="nomPrograma" id="nomPrograma">
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="inputGroup-sizing-default">Código Programa</span>
                    <input type="text" class="form-control" name="codPrograma" id="codPrograma">
                </div>
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="inputGroup-sizing-default">Siglas Programa</span>
                    <input type="text" class="form-control" name="siglaPrograma" id="siglaPrograma">
                </div>
            </div>
            <div class="align-btn border-top pt-3">
                <a href="{{ route('programas.index') }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
                <button type="submit" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
            </div>
        </form>
    </div>

@endsection
