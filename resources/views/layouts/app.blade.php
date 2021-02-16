<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
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
        <a href="#" class="logo">@yield('title-entity')</a>
    </div>


    <main class="">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <div class="footer">
        <a><i class="fas fa-copyright"></i> &nbsp; {{ timezone_version_get() }}</a>
    </div>

</div>
</body>
</html>
