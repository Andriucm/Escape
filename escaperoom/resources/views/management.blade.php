<x-layout>
    <script type="text/javascript" src="{{ URL::asset('../resources/js/gestionarUsuariosBtn.js') }}" defer></script>
    <x-slot name="title">
        Gestionar Usuarios
    </x-slot>
    <main>
        <h1>Gestionar usuarios</h1>
        <div id="seleccion-usuarios">
            <button id="menu-alumnos" onclick="mostrarAlumnos()">Alumnos</button>
            <button id="menu-Profesores" onclick="mostrarProfesores()">Profesores</button>
            <button onclick="location.href='{{ route('solicitudes') }}'" type="button">Solicitudes</button>

        </div>
        <div id="tabla-alumnos" class="flex">
            <div id="fila-cabecera">
                <div>
                    Usuario
                </div>
                <div>
                    Nombre
                </div>
                <div>
                    Apellido
                </div>
                <div>
                    Email
                </div>
                <div>
                    Telefono
                </div>
                <div>
                    codGrupo
                </div>
                <div>
                    Eliminar
                </div>
            </div>
            @foreach ($alumnos as $alumno)
                <div id="fila">
                    <div>
                        {{ $alumno->usuario }}
                    </div>
                    <div>
                        {{ $alumno->nombre }}
                    </div>
                    <div>
                        {{ $alumno->apellido }}
                    </div>
                    <div>
                        {{ $alumno->email }}
                    </div>
                    <div>
                        {{ $alumno->telefono }}
                    </div>
                    <div>
                        {{ $alumno->codGrupo }}
                    </div>
                    <div>
                        <form action="{{ route('management.destroy', $alumno->codUsuario) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
        <div id="tabla-profesores" class="flex">
            <div id="fila-cabecera">
                <div>
                    Usuario
                </div>
                <div>
                    Nombre
                </div>
                <div>
                    Apellido
                </div>
                <div>
                    Email
                </div>
                <div>
                    Telefono
                </div>

            </div>
            @foreach ($profesores as $profesor)
                <div id="fila">
                    <div>
                        {{ $profesor->usuario }}
                    </div>
                    <div>
                        {{ $profesor->nombre }}
                    </div>
                    <div>
                        {{ $profesor->apellido }}
                    </div>
                    <div>
                        {{ $alumno->email }}
                    </div>
                    <div>
                        {{ $alumno->telefono }}
                    </div>

                </div>
            @endforeach
        </div>
    </main>


</x-layout>
