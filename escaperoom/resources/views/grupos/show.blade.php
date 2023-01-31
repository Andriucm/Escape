<x-layout>

    <x-slot name="title">
        Listado alumnos
    </x-slot>
    <main>
        <h1>Alumnos de grupo
        </h1>
        <div id="tabla">
            <div class="fila-cabecera">
                <div class="columna">
                    alumno
                </div>
                <div class="columna">
                    Nombre
                </div>
                <div class="columna">
                    Apellido
                </div>
                <div class="columna">
                    Email
                </div>
                <div class="columna">
                    Telefono
                </div>
                <div class="columna">
                    Rol
                </div>
                <div class="columna">
                    codGrupo
                </div>

                <div class="columna">
                    Eliminar
                </div>
            </div>
            @foreach ($alumnos as $alumno)
                <div class="fila">
                    <div class="columna">
                        {{ $alumno->usuario }}
                    </div>
                    <div class="columna">
                        {{ $alumno->nombre }}
                    </div>
                    <div class="columna">
                        {{ $alumno->apellido }}
                    </div>
                    <div class="columna">
                        {{ $alumno->email }}
                    </div>
                    <div class="columna">
                        {{ $alumno->telefono }}
                    </div>
                    <div class="columna">
                        {{ $alumno->rol }}
                    </div>
                    <div class="columna">
                        {{ $alumno->codGrupo }}
                    </div>
                    <div class="columna">
                        <form action="{{ route('grupos.eliminarGrupo', $alumno->codUsuario) }}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            <input style="background-color: red; padding: 5%;" type="submit" value="Eliminar">
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </main>
</x-layout>
