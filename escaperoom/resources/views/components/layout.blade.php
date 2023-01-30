<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ URL::asset('imagenes/logo.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/general.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/perfil.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}">

    @switch($title)
        @case("Inicio")
            <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
            @break
        @case("Puntuaciones")
            <link rel="stylesheet" href="{{ URL::asset('css/puntuaciones.css') }}" />
            @break
        @case("Grupos")
            <link rel="stylesheet" href="{{ URL::asset('css/grupos.css') }}" />
            @break
        @case("Perfil")
            <link rel="stylesheet" href="{{ URL::asset('css/perfil.css') }}" />
            @break
        @case("Partida")
            <link rel="stylesheet" href="{{ URL::asset('css/partida.css') }}" />
            @break
        @case("Register")
            <link rel="stylesheet" href="{{ URL::asset('css/registerLogin.css') }}" />
            @break
        @case("Login")
            <link rel="stylesheet" href="{{ URL::asset('css/registerLogin.css') }}" />
            @break
        @case("Gestionar Usuarios")
            <link rel="stylesheet" href="{{ URL::asset('css/gestionarUsuarios.css') }}" />
            @break
        @case("Listado alumnos")
            <link rel="stylesheet" href="{{ URL::asset('css/gestionarUsuarios.css') }}" />
            @break
        @case("Crear Grupo")
            <link rel="stylesheet" href="{{ URL::asset('css/.css') }}" />
            @break

    @endswitch
    <title>{{ $title }}</title>
    @vite('resources/js/app.js')
</head>
<body>
@include('flash-message')

    @if ($title != "Partida")
        {{-- <div id="headerSection"></div> --}}
        @include('layouts.header')
    @endif

    <div id="mainSection" style="width: 100%; height: 100%;">
        {{ $slot }}
    </div>



    @if ($title != "Partida")
        <div id="footerSection"></div>
    @endif

    @yield('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
