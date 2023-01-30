<x-layout>
    <x-slot name="title">
        Crear Grupo
    </x-slot>
    <main>
        <div id="form-box">
            <div id="form-header">
                <h2>Nuevo grupo</h2>
            </div>
            <form id="form" action="{{ route('grupos.store')}}" method="POST">
                @csrf
                <input type="text" name="nombre" id="nombre" placeholder="nombre" value="{{ old('nombre') }}">

                @error('nombre')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                @csrf
                <input type="text" name="codigo" id="codigo" placeholder="codigo" value="{{ old('codigo') }}">

                @error('codigo')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <button id="form-btn" type="submit">Crear</button>
        </div>
        </form>

    </main>
</x-layout>
