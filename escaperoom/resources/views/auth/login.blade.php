<x-layout>
    <x-slot name="title">
        Login
    </x-slot>


    <div id="contenedor">
        <img src="{{ URL::asset('/imagenes/fondo1.jpg') }}" alt="fondo">
        <div id="form-box">
            <div id="form-header">
                <h2>¿Ya tienes tu cuenta?</h2>
            </div>
            
            <form id="form" action="{{ route('login') }}" method="POST">
                @csrf
                <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}"> 

                @error('email')
                    <small style="color: red">{{ $message }}</small>

                @enderror
                <input type="password" name="password" id="password" placeholder="Contraseña"> 

                @error('password')
                    <small style="color: red">{{ $message }}</small>

                @enderror
                <a href="{{ route('register') }}">¿No tienes una cuenta?</a>
                <div>
                    <label for="remember">Recuérdame</label>
                    <input type="checkbox" id="check" name="remember" value="1">
                    <button id="form-btn" type="submit">Login</button>
                </div>
            </form>
        </div>
</x-layout>
