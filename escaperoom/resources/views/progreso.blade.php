<!-- <script>
       var filas = document.getElementsByClassName("puntos")[0],
        sumPuntos = 0;

        console.log(filas);

    for (var i = 1; i < filas.length; i++) {
        console.log(filas.length)
        sumPuntos = sumPuntos + parseInt(filas[i].value);
    }

    // document.getElementById("totales").innerHTML = sumPuntos;
    // console.log(sumPuntos);
</script> -->
<x-layout>
    <x-slot name="title">
        Progreso
    </x-slot>
    <main>
        <h1>Progreso personal
        </h1><br><br>
        @if (count($progresos) == 0)
        <h4>No hay partidas registradas</h4>
        @endif

        @if (count($progresos) > 0)
        <table id="tabla" style="color: white;">
            <tr class="fila-cabecera">
                <th class="columna">
                    Codigo de partida
                </th>
                <th class="columna">
                    Dificultad
                </th>
                <th class="columna">
                    Nivel
                </th>
                <th class="columna">
                    Puntos
                </th>
            </tr>

            @foreach ($progresos as $progreso)
            <tr class="fila">
                <td class="columna">
                    {{ $progreso->codPartida }}
                </td>
                <td class="columna">
                    {{ $progreso->dificultad }}
                </td>
                <td class="columna">
                    {{ $progreso->nivel }}
                </td>
                <td class="columna puntos">
                    {{ $progreso->puntos }}
                </td>
            </tr>
            @endforeach
            <tr class="fila">
                <td class="columna">
                    Puntos totales
                </td>
                <td class="columna" id="totales">
                    {{ $totales }}
                </td>
            </tr>
        </table>
        @endif
    </main>
</x-layout>