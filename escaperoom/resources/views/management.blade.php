<x-layout>
    <x-slot name="title">
        Gestionar Usuarios
    </x-slot>
    <main>
        <h1>Gestionar usuarios</h1>
        <div id="BtnGestionarUsuarios"></div>
        <div id="tabla-alumnos">
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
            </div>
            @foreach ($alumnos as $alumno )
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
            </div>
            @endforeach
            
        </div>
        <div id="tabla-profesores" >
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
            </div>
            @foreach ($profesores as $profesor )
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
                <div>
                    {{ $profesor->codGrupo }}
                </div>
            </div>
            @endforeach  
        </div>
    </main>


</x-layout>
