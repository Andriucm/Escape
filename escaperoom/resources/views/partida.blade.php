<x-layout>
    <x-slot name="title">
        Partida
    </x-slot>

    <main>
        <button id="salir">X</button>
        <section class="juego">
            <img src="{{URL::asset('/imagenes/3droom POV.jpg')}}" alt="">
        </section>
        <section id="pistaSection" class="pistas">

        </section>
        <nav class="navegacion">
            <a><p><</p></a>
            <a><p>></p></a>
        </nav>
        <aside class="narrativa"></aside>
    </main>

</x-layout>
