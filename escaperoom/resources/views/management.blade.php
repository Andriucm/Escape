<x-layout>
    <x-slot name="title">
        Gestionar Usuarios
    </x-slot>
    <main>
        <div class="intro">
            <h1>Gestionar usuarios</h1>
            @auth
                @if (Auth::user()->rol == 'admin')
                    <button type="button" class="profes" onclick="window.location.href='./profesores'">Añadir
                        profesor</button>
                @endif
            @endauth
        </div>
        <div id="tabla">
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
                    Rol
                </div>
                <div>
                    codGrupo
                </div>

                <div>
                    Eliminar
                </div>
            </div>
            @foreach ($usuarios as $usuario)
                <div id="fila">
                    <div>
                        {{ $usuario->usuario }}
                    </div>
                    <div>
                        {{ $usuario->nombre }}
                    </div>
                    <div>
                        {{ $usuario->apellido }}
                    </div>
                    <div>
                        {{ $usuario->email }}
                    </div>
                    <div>
                        {{ $usuario->telefono }}
                    </div>
                    <div>
                        {{ $usuario->rol }}
                    </div>
                    <div>
                        {{ $usuario->codGrupo }}
                    </div>
                    <div>
                        <form action="{{ route('management.destroy', $usuario->codUsuario) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="drop" type="submit" value="Eliminar">
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </main>


</x-layout>
