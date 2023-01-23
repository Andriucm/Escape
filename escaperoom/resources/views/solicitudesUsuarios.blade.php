<x-layout>

    <x-slot name="title">
        Solicitudes
    </x-slot>
    <main>
        <h1>Solicitudes</h1>
        <div id="tabla">
            <div class="fila-cabecera">
                <div class="columna"> Usuario</div>
                <div class="columna"> Nombre</div>
                <div class="columna"> Apellido</div>
                <div class="columna"> Email</div>
                <div class="columna"> Aceptar</div>
                <div class="columna"> Rechazar</div>

            </div>
            @foreach ($usuarios as $usuario)
                <div class="fila">
                    <div class="columna">
                        {{ $usuario->usuario }}

                    </div>
                    <div class="columna">
                        {{ $usuario->nombre }}

                    </div>
                    <div class="columna">
                        {{ $usuario->apellido }}

                    </div>
                    <div class="columna">
                        {{ $usuario->email }}

                    </div>
                    <div class="columna">
                        <form action="{{ route('solicitudes.aceptar', $usuario->codUsuario) }}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            <input type="submit" value="Aceptar">
                        </form>
                    </div>
                    <div class="columna">
                        <form action="{{ route('solicitudes.rechazar', $usuario->codUsuario) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>

                    </div>

                </div>
            @endforeach
        </div>
    </main>

</x-layout>
