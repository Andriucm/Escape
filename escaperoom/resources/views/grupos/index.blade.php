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
                <button class="part" onclick="window.location.href='{{ route('grupos.show', $grupo->codGrupo) }}'">Participantes</button>

                <h1>{{ $grupo->nombre }}</h1>
                <b>usuarios</b>
                @auth
                    @if (Auth::User()->rol != 'alumno')
                        <form action="{{ route('grupos.destroy', $grupo->codGrupo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="drop" type="submit" value="Eliminar">
                        </form>
                    @else
                        @if (Auth::User()->codGrupo == null)
                            <form action="{{ route('grupos.update', $grupo->codGrupo) }}" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                <input type="text" name="codigo" placeholder="Codigo">
                                <input style="background-color: #FFC300;" type="submit" value="Entrar">
                            </form>
                        @endif
                    @endif


                @endauth

            </article>
        @endforeach

    </main>
</x-layout>
