<x-layout>
    <x-slot name="title">
        Perfil
    </x-slot>
    <div class="perfil-intro">
        <img src="{{ URL::asset('/imagenes/logo.png') }}" class="fotoPerfil">
        <div class="informacion">
            <h1 style="color: white;" class="nombre">{{ Auth::user()->nombre }}</h1>
            <h1 style="color: white;" class="apellido">{{ Auth::user()->apellido }}</h1>
            <h2 style="color: gray;" class="rol">{{ Auth::user()->rol }}</h2>
        </div>
    </div>
    <div class="perfil-body">
        <div class="datos">
            <div class="intro-datos">
                <i class="fa fa-user"> <b>Información</b></i>
                <button type="button" class="editarInfo">Editar</button>
            </div>
            <hr>
            <table>
                <tr>
                    <td><b>Nombre:</b></td>
                    <td>{{ Auth::user()->nombre }}</td>
                </tr>
                <tr>
                    <td><b>Apellido:</b></td>
                    <td>{{ Auth::user()->apellido }}</td>
                </tr>
                <tr>
                    <td><b>Telefono:</b></td>
                    <td>{{ Auth::user()->telefono }}</td>
                </tr>
                <tr>

                </tr>
            </table>
        </div>
        <br><br>
        <div class="progreso">
            <i class="fa-solid fa-bars-progress"></i>
            <p>Consultar progreso</p>
            <button type="button" class="view">Ver</button>
        </div>
        <br><br>
        <div class="cuenta">
            <div class="intro-cuenta">
                <i class="fa fa-user"> <b>Cuenta</b></i>
                <button type="button" class="editarAccount">Editar</button>
            </div>
            <hr>
            <table>
                <tr>
                    <td><b>Email:</b></td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td><b>Usuario:</b></td>
                    <td>{{ Auth::user()->usuario }}</td>
                </tr>
                <tr>
                    <td>Cambiar contraseña</td>

                </tr>
            </table>
        </div>
    </div>
</x-layout>
