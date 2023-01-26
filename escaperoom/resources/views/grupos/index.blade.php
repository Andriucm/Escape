<x-layout>
    <x-slot name="title">
        Grupos
    </x-slot>
    <main>
        @auth
            @if (Auth::User()->rol != 'alumno')
                <article id="aticulo" onclick="window.location.href='{{ route('grupos.create') }}'">
                    <h1>+</h1>
                </article>
            @endif
        @endauth

        @foreach ($grupos as $grupo)
            <article>
                <h1>{{ $grupo->nombre }}</h1>
                <b>12 usuarios</b>
                @auth
                    @if (Auth::User()->rol != 'alumno')
                        <form action="{{ route('grupos.destroy', $grupo->codGrupo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    @endif

                @endauth

            </article>
        @endforeach

    </main>
</x-layout>
