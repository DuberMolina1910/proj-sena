@extends('layouts.app')
@section('title-entity', 'Gestión Jornadas')
@section('content')

    <div class="cont-all">
        <div class="lbl-return border-bottom pb-5">
            <a href="{{ route('index.manage') }}" class="btn btn-light mr-2"><i class="fas fa-arrow-circle-left"></i></a>
            <h5 class="text-center mb-4 fw-bold ml-2">LISTADO DE JORNADAS</h5>
        </div>
        {{--<div class="mb-4">
            <a href="{{ route('jornadas.create') }}" class="btn btn-primary">CREAR NUEVA JORNADA</a>
        </div>--}}
        <div class="tb">
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th>Id Jornada</th>
                    <th>Descripción Jornada</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jornadas as $jornada)
                <tr>
                    <td>{{ $jornada->idJornada }}</td>
                    <td>{{ $jornada->descJornada }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
