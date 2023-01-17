<x-layout>
    <x-slot name="title">
        Ingrese su cuenta
    </x-slot>

    <h1>Ingrese su cuenta</h1>
    <div id="contenedor">

        <div id="register-box">
            <div id="register-header">
                <h2>¿No tienes cuenta todavia?</h2>
            </div>
            <form id="register-form" action="{{ route('login') }}" method="POST">
                @csrf

                <input type="text" name="email" id="login-email" placeholder="Email"
                    value="{{ old('email') }}"> <br>

                @error('email')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="password" name="password" id="login-password" placeholder="Contraseña"> <br>

                @error('password')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <a href="{{ route('register') }}">¿No tienes una cuenta?</a>

                <input type="checkbox" name="remember"> <span>Recuérdame</span>
                <button type="submit">Login</button>

            </form>
        </div>
</x-layout>
