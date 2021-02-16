@extends('layouts.app')

@section('content')

    <div class="cont-all container-per">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card dc-manage">
                    <a href="{{ route('perfiles.index') }}" class="a-manage">
                        <img src="/img/default/profiles.jpg" class="card-img-top" alt="" height="200px" width="200px">
                        <div class="card-body d-manage">
                            <h5 class="card-title h5-manage">Gestión de Perfiles</h5>
                            <p class="card-text p-manage">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card dc-manage">
                    <a href="{{ route('usuarios.index') }}" class="a-manage">
                        <img src="/img/default/users.jpeg" class="card-img-top" alt="" height="200px" width="200px">
                        <div class="card-body d-manage">
                            <h5 class="card-title h5-manage">Gestión de Usuarios</h5>
                            <p class="card-text p-manage">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card dc-manage">
                    <a href="{{ route('fichas.index') }}" class="a-manage">
                        <img src="/img/default/groups.jpg" class="card-img-top" alt="" height="200px" width="200px">
                        <div class="card-body d-manage">
                            <h5 class="card-title h5-manage">Gestión de Fichas</h5>
                            <p class="card-text p-manage">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card dc-manage">
                    <a href="{{ route('programas.index') }}" class="a-manage">
                        <img src="/img/default/programs.jpg" class="card-img-top" alt="" height="200px" width="200px">
                        <div class="card-body d-manage">
                            <h5 class="card-title h5-manage">Gestión de Programas</h5>
                            <p class="card-text p-manage">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
