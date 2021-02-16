@extends('layouts.app')
@section('title-entity', 'Gestión Perfiles')
@section('content')

    <div class="cont-all">
        <div class="lbl-return">
            <a href="{{ route('index.manage') }}" class="btn btn-light mr-2"><i class="fas fa-arrow-circle-left"></i></a>
            <h5 class="text-center mb-4 fw-bold ml-2">LISTADO DE PERFILES</h5>
            <a href="{{ route('perfiles.create') }}" class="btn btn-add ml-auto" id="btn-check-add">CREAR NUEVO PERFIL</a>
        </div>

        <div class="tb">
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th>Código de Perfil</th>
                    <th>Nombre del Perfil</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($perfiles as $per)
                    <tr>
                        <td class="align-middle">{{ $per->codPerfil }}</td>
                        <td class="align-middle">{{ $per->nomPerfil }}</td>
                        <td class="align-middle">
                            <a href="{{ route( 'perfiles.edit', $per->codPerfil ) }}" class="btn"><i class="fas fa-edit"></i></a>
                            <form action="{{ route( 'perfiles.delete', $per->codPerfil ) }}" method="POST" class="d-inline">
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
    </div>

@endsection
