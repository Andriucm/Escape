<x-layout>
    <x-slot name="title">
        Listado alumnos
    </x-slot>
    <main>
        <h1>Alumnos de grupo
        </h1>
        <div id="tabla" >
            <div id="fila-cabecera">
                <div>
                    alumno
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
                    Rol
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
                        {{ $alumno->rol }}
                    </div>
                    <div>
                        {{ $alumno->codGrupo }}
                    </div>
                    <div>
                        {{--  --}}
                    </div>
                </div>
            @endforeach

        </div>
    </main>
</x-layout>
