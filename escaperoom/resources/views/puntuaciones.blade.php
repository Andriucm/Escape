<x-layout>
    <x-slot name="title">
        Puntuaciones
    </x-slot>
    
    <h1>Puntuaciones</h1>
    <div id="tabla">
        <div class="fila">
            <div class="columna"> Usuario</div>
            <div class="columna"> Puntos</div>
        </div>
        @foreach ($usuarios as $usuario)
            <div class="fila">
                <div class="columna">
                    {{ $usuario-> usuario }}
                </div>
                <div class="columna">
                    {{ $usuario-> puntos }}
                </div>
            </div>

            @endforeach     
    </div>
        {{-- <table id="tabla-puntuacion">
            <tr>
                <th>Usuario </th>
                <th>Puntuacion</th>
                
            </tr>
            
        </table> --}}
        
</x-layout>