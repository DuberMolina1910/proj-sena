@extends('layouts.app')
@section('title-entity', 'Gestión Fichas')
@section('content')

<div class="cont-all">
    <div class="lbl-return">
        <a href="{{ route('index.manage') }}" class="btn btn-light mr-2"><i class="fas fa-arrow-circle-left"></i></a>
        <h5 class="text-center mb-4 fw-bold ml-2">LISTADO DE FICHAS</h5>
        <a href="{{ route('fichas.create') }}" class="btn btn-add ml-auto" id="btn-check-add">CREAR NUEVA FICHA</a>
    </div>
    <div class="div-search">
        <p class="text-center mb-4 fw-bold ml-2 fs-6 me-3">FILTROS</p>
        <div class="input-group mb-3 d-flex">
            <form class="d-flex input-group mb-4">
                <span class="input-group-text" id="">Jornada</span>
                <select class="form-select form-control" name="jornadasId" id="jornadasId">
                    <option value="">---- Seleccione ----</option>
                    @foreach($jornadas as $jor)
                        <option value="{{ $jor->idJornada }}">{{ $jor->descJornada }}</option>
                    @endforeach
                </select>

                <span class="input-group-text" id="">Carácter</span>
                <input type="search" class="form-control" placeholder="" aria-label="" name="searchChar" id="searchChar">

                <span class="input-group-text" id="basic-addon1">Estado</span>
                <select class="form-select form-control" name="estadoFicha" id="estadoFicha">
                    <option value="">---- Seleccione ----</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
                <button type="submit" class="btn btn-add"><i class="fas fa-search"></i></button>
                <a href="{{ route('fichas.index') }}" class="btn btn-add ms-3" id="btn-check-add">BORRAR FILTROS</a>
            </form>
        </div>
    </div>
    <div class="tb">
        <table class="table">
            <thead class="table-secondary">
                <tr class="text-center">
                    <th>Estado</th>
                    <th>Jornada</th>
                    <th>Número de Ficha</th>
                    <th>Programa</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            {{--@if(count($fichas) <= 0)
                <tr>
                    <td class="align-middle bg-light text-center" colspan="11">
                        <i class="fas fa-exclamation-circle"></i> &nbsp; <small>SIN RESULTADOS</small>
                    </td>
                </tr>
            @else--}}
            @foreach($ficha as $f)
                <tr class="text-center">
                    <td class="align-middle">
                        @if($f->estadoFicha == 1)
                            <i class="fas fa-circle text-success"></i>
                        @else
                            <i class="fas fa-circle text-danger"></i>
                        @endif
                    </td>
                    <td class="align-middle">{{ $f->descJornada }}</td>
                    <td class="align-middle">{{ $f->numFicha }}</td>
                    <td class="align-middle">{{ $f->nomPrograma }}</td>
                    <td class="align-middle">
                        <a href="{{ route('fichas.edit', $f->numFicha ) }}" class="btn"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
            {{--@endif--}}
            </tbody>
        </table>
    </div>
</div>

@endsection
