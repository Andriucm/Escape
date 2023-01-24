<x-layout>
    <x-slot name="title">
        Partida
    </x-slot>

    <main>
        <button onclick="location.href='{{ route('index') }}'" type="button" id="salir">X</button>
        <section class="juego">
            <img src="{{URL::asset('/imagenes/3droom POV.jpg')}}" alt="">
        </section>
        <section id="pistaSection" class="pistas">

        </section>
        <nav class="navegacion">
            <a><p><</p></a>
            <a><p>></p></a>
        </nav>
        <aside class="narrativa">
            <h1>Fase <b>5</b></h1>
            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit id molestias suscipit quae? Est eos a id quos dolore obcaecati quod iure nisi alias non fugit quae quis dolorum laboriosam, similique amet aut quia repudiandae deleniti culpa explicabo, dicta in sit necessitatibus! Suscipit repellat unde sequi laboriosam alias! Minus ducimus id, esse, expedita maiores adipisci laudantium hic voluptatem quis reprehenderit exercitationem aliquam rem repellendus totam. Aperiam accusantium ducimus quas omnis dolores tempora quibusdam tempore commodi ratione voluptatem corrupti aliquam voluptates error debitis, rerum ipsa maiores doloribus laborum vitae eum aspernatur ut, velit ab dolorem. Cum cumque sunt ratione similique temporibus?</h5>
        </aside>
    </main>

</x-layout>
