@extends('layouts.app')
@section('title-entity', 'Gestión Usuarios')
@section('content')

    <div class="cont-all">
        <h5 class="text-center mb-4 border-bottom pb-3">CONFIRMAR ACTUALIZACIÓN</h5>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Número de identificación</span>
                <input type="text" class="form-control" name="docUsuario" id="docUsuario" value="{{ $usuarios->docUsuario }}" disabled>
            </div>
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Tipo de documento</span>
                @switch($usuarios->tipoDocumento)
                    @case('0')
                    <input type="text" class="form-control" name="tipoDocumento" id="tipoDocumento" value="Cédula de Ciudadanía" disabled>
                    @break
                    @case('1')
                    <input type="text" class="form-control" name="tipoDocumento" id="tipoDocumento" value="NIT" disabled>
                    @break
                    @case('2')
                    <input type="text" class="form-control" name="tipoDocumento" id="tipoDocumento" value="Cédula de Extranjería" disabled>
                    @break
                    @case('3')
                    <input type="text" class="form-control" name="tipoDocumento" id="tipoDocumento" value="Pasaporte" disabled>
                    @break
                    @case('4')
                    <input type="text" class="form-control" name="tipoDocumento" id="tipoDocumento" value="NUIP" disabled>
                    @break
                    @case('5')
                    <input type="text" class="form-control" name="tipoDocumento" id="tipoDocumento" value="Identificación de Extranjeros" disabled>
                    @break
                    @case('6')
                    <input type="text" class="form-control" name="tipoDocumento" id="tipoDocumento" value="PEP" disabled>
                    @break
                @endswitch
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Nombres</span>
                <input type="text" class="form-control" name="nomUsuario" id="nomUsuario" value="{{ $usuarios->nomUsuario }}" disabled>
            </div>
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Apellidos</span>
                <input type="text" class="form-control" name="apelUsuario" id="apelUsuario" value="{{ $usuarios->apelUsuario }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Fecha de nacimiento</span>
                <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="{{ $usuarios->fechaNacimiento }}" disabled>
            </div>
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Correo electrónico</span>
                <input type="text" class="form-control" name="correoUsuario" id="correoUsuario" value="{{ $usuarios->correoUsuario }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Género</span>
                @switch($usuarios->genero)
                    @case('0')
                        <input type="text" class="form-control" name="genero" id="genero" value="Femenino" disabled>
                    @break
                    @case('1')
                        <input type="text" class="form-control" name="genero" id="genero" value="Masculino" disabled>
                    @break
                @endswitch
            </div>
            <div class="input-group mb-4 col">
                <label class="input-group-text" for="fotoPerfil">Foto de perfil</label>
                <input type="text" class="form-control" name="fotoPerfil" id="fotoPerfil" value="{{ $usuarios->fotoPerfil }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Tipo de perfil</span>
                <input type="text" class="form-control" name="nomPerfil" id="nomPerfil" value="{{ $usuarios->nomPerfil }}" disabled>
            </div>
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Estado</span>
                @switch($usuarios->estadoUsuario)
                    @case('0')
                        <input type="text" class="form-control" name="estadoUsuario" id="estadoUsuario" value="Inactivo" disabled>
                    @break
                    @case('1')
                        <input type="text" class="form-control" name="estadoUsuario" id="estadoUsuario" value="Activo" disabled>
                    @break
                @endswitch
            </div>
        </div>
        <div class="row">
            <div class="input-group mb-4 col">
                <span class="input-group-text" id="">Ficha</span>
                <input type="text" class="form-control" name="numFicha" id="numFicha" value="{{ $usuarios->numFicha }} - {{ $usuarios->nomPrograma }}" disabled>
            </div>
        </div>
        <div class="align-btn border-top pt-3">
            <a href="{{ route('usuarios.edit', $usuarios->docUsuario) }}" class="btn btn-return"><i class="fas fa-arrow-circle-left"></i> &nbsp; EDITAR</a>
            <a href="{{ route('usuarios.index') }}" class="btn btn-add">CONFIRMAR &nbsp; <i class="fas fa-check-circle"></i></a>
        </div>
    </div>

@endsection
