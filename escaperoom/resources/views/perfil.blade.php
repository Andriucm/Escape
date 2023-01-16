<x-layout>
    <x-slot name="title">
        Perfil
    </x-slot>
    <div class="perfil-intro">
        <img src="{{URL::asset('/imagenes/logo.png')}}" class="fotoPerfil">
        <div class="informacion">
            <h1 style="color: white;" class="nombre">Saray</h1>
            <h1 style="color: white;" class="apellido">Uscola</h1>
            <h2 style="color: gray;" class="rol">Alumno</h2>
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
                        <td>Saray</td>
                    </tr>
                    <tr>
                        <td><b>Apellido:</b></td>
                        <td>Uscola</td>
                    </tr>
                    <tr>
                        <td><b>Telefono:</b></td>
                        <td>685326876</td>
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
                        <td>saray@gmail.com</td>
                    </tr>
                    <tr>
                        <td><b>Contraseña:</b></td>
                        <td>saray123</td>
                    </tr>
                </table>
            </div>
        </div>
</x-layout>