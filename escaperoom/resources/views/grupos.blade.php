<x-layout>
    <x-slot name="title">
        Grupos
    </x-slot>
    <main>
        @auth
            @if (Auth::User()->rol != 'alumno')
                           <article id="aticulo">
                    <h1>+</h1>
                </article>
            @endif
        @endauth

        @foreach ($grupos as $grupo)
            <article>
                <h1>{{ $grupo->nombre }}</h1>
                <b>12 usuarios</b>
                <form action="" method="POST"></form>
            </article>
        @endforeach

    </main>
</x-layout>
