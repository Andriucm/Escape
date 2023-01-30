<header class="header-container">
    <div class="header">
        <a href="{{ route('index') }}"><img src="../public/imagenes/logo.png" alt="Logo" class="logo"></a>
        <div class="row">
            <ul>
                <li><a href="{{route('puntuaciones')}}">Puntuaciones</a></li>
                <li><a href="{{route('grupos.index')}}">Grupos</a></li>
                @auth

                    <li><a href="{{route('perfil')}}">Perfil</a></li>
                @endauth

                @auth
                @if (Auth::user()->rol=='admin')
                <li><a href="./management">Usuarios</a></li>
                @endif
                @endauth



                @guest
                    <li><a href="./login">Ingresa tu cuenta</a></li>
                @else
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button id="btn-logout">Logout</button>
                    </form>

                @endauth
                <button onclick="location.href='{{ route('partida') }}'" type="button" class="btn">Jugar</button>
            </ul>
        </div>
    </div>
</header>
