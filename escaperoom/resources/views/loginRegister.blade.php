<x-layout>
    <x-slot name="title">
        Ingrese su cuenta
    </x-slot>

    <h1 style="color: white; font-family:'Play', sans-serif">Ingrese su cuenta</h1>
    <div id="contenedor">

        {{-- <div id="login-box">
            <div id="login-header">
                <h2>Ya nos conocemos...</h2>
            </div>
            <form id="login-form" action="{{ route('login.store') }}" method="POST">
                <input type="text" name="username" id="login-username" placeholder="Usuario">
                <input type="password" name="password" id="login-password" placeholder="Contraseña">
                <button type="submit">Enviar</button>
            </form>
        </div> --}}

        <div id="register-box">
            <div id="register-header">
                <h2 style="color: white; font-family:'Play', sans-serif">¿No tienes cuenta todavia?</h2>
            </div>
            <form id="register-form" action="{{ route('login.store') }}" method="POST">
                @csrf

                <input type="text" name="username" id="register-username" placeholder="Usuario"> <br>
                
                @error('username')
                <br>
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="email" id="register-email" placeholder="example@gmail.com"> <br>
                
                @error('email')
                <br>
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="name" id="register-nombre" placeholder="Nombre"> <br>
                
                @error('name')
                <br>
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="surname" id="register-apellido" placeholder="Apellido"> <br>
                
                @error('surname')
                <br>
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="text" name="tel" id="register-telefono" placeholder="Telefono"> <br>
                
                @error('tel')
                <br>
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="password" name="password" id="register-password" placeholder="Contraseña"> <br>
                
                @error('password')
                <br>
                
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="password" name="password2" id="register-password2" placeholder="Segunda contraseña"> <br>
                
                <button type="submit">Enviar</button>
                
            </form>
        </div>
</x-layout>
