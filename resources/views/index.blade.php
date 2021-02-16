<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SENA | @yield('title')</title>
    <style>
    </style>
</head>
<body>

<div class="container">
    <div class="header log-nav-container">
        <a href="#" class="logo">SENA</a>
        <a href="#" class="logo">Modulo de gestión</a>
    </div>

    <main class="main" id="cont-main">
        <div class="container" id="">
            <h3 class="title-welcome">Bienvenidos al Sistema de Gestión</h3>
            <div class="login">
                <img src="https://www.newsapp.telemundo.com/sites/nbcutelemundo/files/styles/article_cover_image/public/images/article/cover/2018/12/17/jovenes-en-biblioteca.jpg?itok=f-dxOThN" alt="" height="100%" width="100%">
                <div class="btn-login">
                    <a href="{{ route('index.manage') }}" class="btn" id="btn-login">INGRESAR</a>
                </div>
            </div>
        </div>
    </main>

    <div class="footer" id="footer">
        <a><i class="fas fa-copyright"></i> &nbsp; {{ timezone_version_get() }}</a>
    </div>

</div>
</body>
</html>
