<x-layout>

    <x-slot name="title">
        Listado alumnos
    </x-slot>
    <main>
        <h1>Alumnos del grupo
        </h1><br><br>
        @if (count($alumnos) == 0)
        <h4>No hay alumnos en este grupo</h4>
        @endif

        @if (count($alumnos) > 0)
        <table id="tabla">
            <tr class="fila-cabecera">
                <th class="columna">
                    alumno
                </th>
                <th class="columna">
                    Nombre
                </th>
                <th class="columna">
                    Apellido
                </th>
                <th class="columna">
                    Email
                </th>
                <th class="columna">
                    Telefono
                </th>
                <th class="columna">
                    Rol
                </th>
                <th class="columna">
                    Codigo de grupo
                </th>

                <th class="columna">
                    Eliminar
                </th>
            </tr>
            @foreach ($alumnos as $alumno)
            <tr class="fila">
                <td class="columna">
                    {{ $alumno->usuario }}
                </td>
                <td class="columna">
                    {{ $alumno->nombre }}
                </td>
                <td class="columna">
                    {{ $alumno->apellido }}
                </td>
                <td class="columna">
                    {{ $alumno->email }}
                </td>
                <td class="columna">
                    {{ $alumno->telefono }}
                </td>
                <td class="columna">
                    {{ $alumno->rol }}
                </td>
                <td class="columna">
                    {{ $alumno->codGrupo }}
                </td>
                <td class="columna">
                    <form action="{{ route('grupos.eliminarGrupo', $alumno->codUsuario) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <input style="background-color: red; padding: 5%;" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
    </main>
</x-layout>