<x-layout>
    <x-slot name="title">
        Ingrese su cuenta
    </x-slot>

    <h1 style="color: white; font-family:'Play', sans-serif">Ingrese su cuenta</h1>
    <div id="contenedor">

        <div id="register-box">
            <div id="register-header">
                <h2 style="color: white; font-family:'Play', sans-serif">¿No tienes cuenta todavia?</h2>
            </div>
            <form id="register-form" action="{{ route('register.store') }}" method="POST">
                @csrf
                
                <input type="text" name="usuario" id="register-username" placeholder="Usuario" value="{{ old('usuario') }}"> <br>
                
                @error('usuario')
                
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="email" name="email" id="register-email" placeholder="example@gmail.com" value="{{ old('email') }}"> <br>
                
                @error('email')
                
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="name" id="register-nombre" placeholder="Nombre" value="{{ old('name') }}"> <br>
                
                @error('name')
                
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="surname" id="register-apellido" placeholder="Apellido" value="{{ old('surname') }}"> <br>
                
                @error('surname')
                
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="telefono" id="register-telefono" placeholder="Telefono" value="{{ old('telefono') }}"> <br>
                
                @error('telefono')
                
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="password" name="password" id="register-password" placeholder="Contraseña"> <br>
                
                @error('password')
                
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="password" name="password_confirmation" id="register-password2" placeholder="Segunda contraseña"> <br>
                <a href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
                <button type="submit">Enviar</button>
                
            </form>
        </div>
</x-layout>
