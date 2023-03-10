<x-layout>

    <x-slot name="title">
        Puntuaciones
    </x-slot>
    <main>
        <h1>Puntuaciones</h1>
        @if (count($usuarios) == 0)
        <h4>No hay puntuaciones registradas</h4>
        @endif

        @if (count($usuarios) > 0)
        <div id="tabla">
            <div class="fila-cabecera">
                <div class="columna"> Usuario</div>
                <div class="columna"> Puntos</div>
            </div>
            @foreach ($usuarios as $usuario)
                <div class="fila">
                    <div class="columna">
                        {{ $usuario->usuario }}
                    </div>
                    <div class="columna">
                        {{ $usuario->puntos }}
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </main>

</x-layout>
