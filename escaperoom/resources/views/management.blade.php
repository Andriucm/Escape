<x-layout>
    <script type="text/javascript" src="{{ URL::asset('/js/gestionarUsuariosBtn.js') }}" defer></script>
    <x-slot name="title">
        Gestionar Usuarios
    </x-slot>
    <main>
        <div class="intro">
            <h1>Gestionar usuarios</h1>
            <button type="button" class="profes" onclick="window.location.href='./profesores'">Añadir profesor</button>
        </div>
        <table id="tabla">
            <tr id="fila-cabecera">
                <th>
                    Usuario
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Email
                </th>
                <th>
                    Telefono
                </th>
                <th>
                    codGrupo
                </th>
                <th>
                    Rol
                </th>
                <th>
                    Eliminar
                </th>
            </tr>
            @foreach ($usuarios as $usuario)
            <tr id="fila">
                <td>
                    {{ $usuario->usuario }}
                </td>
                <td>
                    {{ $usuario->nombre }}
                </td>
                <td>
                    {{ $usuario->apellido }}
                </td>
                <td>
                    {{ $usuario->email }}
                </td>
                <td>
                    {{ $usuario->telefono }}
                </td>
                <td>
                    {{ $usuario->rol }}
                </td>
                <td>
                    {{ $usuario->codGrupo }}
                </td>
                <td>
                    <form action="{{ route('management.destroy', $usuario->codUsuario) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="drop" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </main>


</x-layout>