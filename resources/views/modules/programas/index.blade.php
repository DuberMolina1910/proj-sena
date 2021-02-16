@extends('layouts.app')
@section('title', 'Programas')
@section('title-entity', 'Gestión Programas')
@section('content')

    <div class="cont-all">
        <div class="lbl-return">
            <a href="{{ route('index.manage') }}" class="btn btn-light mr-2"><i class="fas fa-arrow-circle-left"></i></a>
            <h5 class="text-center mb-4 fw-bold ml-2">LISTADO DE PROGRAMAS</h5>
            <a href="{{ route('programas.create') }}" class="btn btn-add ml-auto" id="btn-check-add">CREAR NUEVO PROGRAMA</a>
        </div>

        <div class="tb">
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th>Código del Programa</th>
                    <th>Nombre del Programa</th>
                    <th>Siglas del Programa</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($programas as $pro)
                    <tr class="">
                        <td class="align-middle">{{ $pro->codPrograma  }}</td>
                        <td class="align-middle">{{ $pro->nomPrograma }}</td>
                        <td class="align-middle">{{ $pro->siglaPrograma }}</td>
                        <td class="align-middle">
                            <a href="{{ route('programas.edit', $pro->codPrograma ) }}" class="btn"><i class="fas fa-edit"></i></a>
                            <form action="{{ route( 'programas.delete', $pro->codPrograma) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-del"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3 text-center">
            {!! $programas->links() !!}
        </div>
    </div>

@endsection
