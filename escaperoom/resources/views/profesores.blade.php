<x-layout>
    <x-slot name="title">
        Register
    </x-slot>
    
    <main id="contenedor">
        <div id="form-box">
            <div id="form-header">
                <h2>Añadir profesor</h2>
            </div>
            <form id="form" action="{{ route('profesor.store') }}" method="POST">
                @csrf

                <input type="text" name="usuario" id="form-username" placeholder="Usuario"
                    value="{{ old('usuario') }}"> 

                @error('usuario')
                    <small style="color: red">{{ $message }}</small>
    
                @enderror
                <input type="email" name="email" id="form-email" placeholder="example@gmail.com"
                    value="{{ old('email') }}"> 

                @error('email')
                    <small style="color: red">{{ $message }}</small>
    
                @enderror
                <input type="text" name="name" id="form-nombre" placeholder="Nombre" value="{{ old('name') }}">
                

                @error('name')
                    <small style="color: red">{{ $message }}</small>
    
                @enderror
                <input type="text" name="surname" id="form-apellido" placeholder="Apellido"
                    value="{{ old('surname') }}"> 

                @error('surname')
                    <small style="color: red">{{ $message }}</small>
    
                @enderror
                <input type="text" name="telefono" id="form-telefono" placeholder="Telefono"
                    value="{{ old('telefono') }}">

                @error('telefono')
                    <small style="color: red">{{ $message }}</small>
    
                @enderror
                <input type="password" name="password" id="form-password" placeholder="Contraseña">

                @error('password')
                    <small style="color: red">{{ $message }}</small>
    
                @enderror
                <input type="password" name="password_confirmation" id="form-password2"
                    placeholder="Segunda contraseña"> 
                <div>
                    <button id="form-btn" type="submit">Enviar</button>
                </div>
            </form>
        </div>
</x-layout>
