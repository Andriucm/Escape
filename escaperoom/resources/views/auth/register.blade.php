<x-layout>
    <x-slot name="title">
        Register
    </x-slot>

    <h1 style="color: white; font-family:'Play', sans-serif">Ingrese su cuenta</h1>
    <div id="contenedor">

        <div id="form-box">
            <div id="form-header">
                <h2 style="color: white; font-family:'Play', sans-serif">¿No tienes cuenta todavia?</h2>
            </div>
            <form id="form" action="{{ route('register.store') }}" method="POST">
                @csrf

                <input type="text" name="usuario" id="form-username" placeholder="Usuario"
                    value="{{ old('usuario') }}"> <br>

                @error('usuario')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="email" name="email" id="form-email" placeholder="example@gmail.com"
                    value="{{ old('email') }}"> <br>

                @error('email')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="name" id="form-nombre" placeholder="Nombre" value="{{ old('name') }}">
                <br>

                @error('name')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="surname" id="form-apellido" placeholder="Apellido"
                    value="{{ old('surname') }}"> <br>

                @error('surname')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="telefono" id="form-telefono" placeholder="Telefono"
                    value="{{ old('telefono') }}"> <br>

                @error('telefono')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="password" name="password" id="form-password" placeholder="Contraseña"> <br>

                @error('password')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="password" name="password_confirmation" id="form-password2"
                    placeholder="Segunda contraseña"> <br>
                <a href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
                <div>
                    <button id="form-btn" type="submit">Enviar</button>
                </div>
            </form>
        </div>
</x-layout>
