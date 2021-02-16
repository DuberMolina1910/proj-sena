@extends('layouts.app')
@section('title-entity', 'Gestión Usuarios')
@section('content')

    <div class="cont-all">
        <div class="lbl-return">
            <a href="{{ route('index.manage') }}" class="btn btn-light mr-2"><i class="fas fa-arrow-circle-left"></i></a>
            <h5 class="text-center mb-4 fw-bold ml-2">LISTADO DE USUARIOS</h5>
            <a href="{{ route('usuarios.create') }}" class="btn btn-add ml-auto" id="btn-check-add">CREAR NUEVO USUARIO</a>
        </div>

        <div class="tb">
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th>Estado</th>
                    <th>N° de identificación</th>
                    <th>Tipo de documento</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de nacimiento</th>
                    <th>Correo electrónico</th>
                    <th>Género</th>
                    <th>Foto de perfil</th>
                    <th>Perfil</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @if(count($usuarios) <= 0)
                    <tr>
                        <td class="align-middle bg-light text-center" colspan="11">
                            <i class="fas fa-exclamation-circle"></i> &nbsp; <small>NO HAY USUARIOS REGISTRADOS</small>
                        </td>
                    </tr>
                @else
                @foreach($usuarios as $usu)
                    <tr>
                        <td class="align-middle">
                            @if($usu->estadoUsuario == 1)
                                <i class="fas fa-circle text-success"></i>
                            @else
                                <i class="fas fa-circle text-danger"></i>
                            @endif
                        </td>
                        <td class="align-middle">{{ $usu->docUsuario  }}</td>
                        <td class="align-middle">
                            @switch($usu->tipoDocumento)
                                @case('0')
                                    Cédula de Ciudadanía
                                    @break
                                @case('1')
                                    NIT
                                    @break
                                @case('2')
                                    Cédula de Extranjería
                                    @break
                                @case('3')
                                    Pasaporte
                                    @break
                                @case('4')
                                    NUIP
                                    @break
                                @case('5')
                                    Identificación de Extranjeros
                                    @break
                                @case('6')
                                    PEP
                                    @break
                            @endswitch
                        </td>
                        <td class="align-middle">{{ $usu->nomUsuario }}</td>
                        <td class="align-middle">{{ $usu->apelUsuario }}</td>
                        <td class="align-middle">{{ $usu->fechaNacimiento }}</td>
                        <td class="align-middle">{{ $usu->correoUsuario }}</td>
                        <td class="align-middle">
                            @if($usu->genero == 1)
                                Masculino
                            @else
                                Femenino
                            @endif
                        </td>
                        <td class="align-middle text-center">
                            <img src="/img/profile/{{ $usu->fotoPerfil }}" alt="" height="30px" width="30px">
                        </td>
                        <td class="align-middle">{{ $usu->nomPerfil }}</td>
                        <td class="align-middle">
                            <a href="{{ route('usuarios.edit', $usu->docUsuario ) }}" class="btn"><i class="fas fa-edit"></i></a>
                            @if($usu->codPerfil != 1001 )
                                <form action="{{ route( 'usuarios.delete', $usu->docUsuario ) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-del"><i class="fas fa-trash"></i></button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
