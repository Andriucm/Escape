<x-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <h1>Ingrese su cuenta</h1>
    <div id="contenedor">

        <div id="form-box">
            <div id="form-header">
                <h2>¿No tienes cuenta todavia?</h2>
            </div>
            <form id="form" action="{{ route('login') }}" method="POST">
                @csrf

                <input type="text" name="email" id="email" placeholder="Email"
                    value="{{ old('email') }}"> <br>

                @error('email')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <input type="password" name="password" id="password" placeholder="Contraseña"> <br>

                @error('password')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <a href="{{ route('register') }}">¿No tienes una cuenta?</a>
            <div>
                <input type="checkbox" name="remember"> <span for="#">Recuérdame</span>
                <button id="form-btn" type="submit">Login</button>
            </div>
            </form>
        </div>
</x-layout>
