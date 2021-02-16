@extends('layouts.app')
@section('title-entity', 'Gestión Usuarios')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4 border-bottom pb-3">ACTUALIZAR DATOS DEL USUARIO</h5>
        <form action="{{ route('usuarios.update', $usuarios->docUsuario) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Número de identificación</span>
                    <input type="text" class="form-control" name="docUsuario" id="docUsuario" value="{{ $usuarios->docUsuario }}">
                </div>
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Tipo de documento</span>
                    <select class="form-select form-control" name="tipoDocumento" id="tipoDocumento">
                        @switch($usuarios->tipoDocumento)
                            @case('0')
                            <option value="0">Cédula de Ciudadanía</option>
                            @break
                            @case('1')
                            <option value="1">NIT</option>
                            @break
                            @case('2')
                            <option value="2">Cédula de Extranjería</option>
                            @break
                            @case('3')
                            <option value="3">Pasaporte</option>
                            @break
                            @case('4')
                            <option value="4">NUIP</option>
                            @break
                            @case('5')
                            <option value="5">Identificación de Extranjeros</option>
                            @break
                            @case('6')
                            <option value="6">PEP</option>
                            @break
                        @endswitch
                        <option value="">---- Seleccione ----</option>
                        <option value="0">Cédula de Ciudadanía</option>
                        <option value="1">NIT</option>
                        <option value="2">Cédula de Extranjería</option>
                        <option value="3">Pasaporte</option>
                        <option value="4">NUIP</option>
                        <option value="5">Identificación de Extranjeros</option>
                        <option value="6">PEP</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Nombres</span>
                    <input type="text" class="form-control" name="nomUsuario" id="nomUsuario" value="{{ $usuarios->nomUsuario }}">
                </div>
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Apellidos</span>
                    <input type="text" class="form-control" name="apelUsuario" id="apelUsuario" value="{{ $usuarios->apelUsuario }}">
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Fecha de nacimiento</span>
                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="{{ $usuarios->fechaNacimiento }}">
                </div>
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Correo electrónico</span>
                    <input type="text" class="form-control" name="correoUsuario" id="correoUsuario" value="{{ $usuarios->correoUsuario }}">
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Género</span>
                    <select class="form-select form-control" name="genero" id="genero">
                        @switch($usuarios->tipoDocumento)
                            @case('0')
                            <option value="0">Femenino</option>
                            @break
                            @case('1')
                            <option value="1">Masculino</option>
                            @break
                        @endswitch
                        <option value="">---- Seleccione ----</option>
                        <option value="0">Femenino</option>
                        <option value="1">Masculino</option>
                    </select>
                </div>
                <div class="input-group mb-4 col">
                    <label class="input-group-text" for="fotoPerfil">Foto de perfil</label>
                    <input type="file" class="form-control" name="fotoPerfil" id="fotoPerfil" accept="image/*" value="{{ $usuarios->fotoPerfil }}">
                    @error('fotoPerfil')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Tipo de perfil</span>
                    <select class="form-select form-control" name="codPerfil" id="codPerfil">
                        <option value="{{ $usuarios->codPerfil }}">{{ $usuarios->nomPerfil }}</option>
                        <option value="">---- Seleccione ----</option>
                        @foreach($perfiles as $p)
                            <option value="{{ $p->codPerfil }}">{{ $p->nomPerfil }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Estado</span>
                    <select class="form-select form-control" name="estadoUsuario" id="estadoUsuario">
                        @switch($usuarios->estadoUsuario)
                            @case('0')
                            <option value="0">Inactivo</option>
                            @break
                            @case('1')
                            <option value="1">Activo</option>
                            @break
                        @endswitch
                        <option value="">---- Seleccione ----</option>
                        <option value="0">Inactivo</option>
                        <option value="1">Activo</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-4 col">
                    <span class="input-group-text" id="">Ficha</span>
                    <select class="form-select form-control" name="numFicha" id="numFicha">
                        <option value="{{ $usuarios->numFicha }}">{{ $usuarios->numFicha }} - {{ $usuarios->nomPrograma }}</option>
                        <option value="">---- Seleccione ----</option>
                        @foreach($fichas as $f)
                            <option value="{{ $f->numFicha }}">{{ $f->numFicha }} - {{ $f->nomPrograma }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="align-btn border-top pt-3">
                <a href="{{ route('usuarios.index') }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; VOLVER</a>
                <button type="submit" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></button>
            </div>
        </form>
    </div>

@endsection
