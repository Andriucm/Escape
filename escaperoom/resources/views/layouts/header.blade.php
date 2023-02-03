<header class="header-container">
    <div class="header">
        <a href="{{ route('index') }}"><img src="{{ URL::asset('/imagenes/logo.png') }}" alt="Logo" class="logo"></a>
        <div class="row">
            <ul>
                <li><a href="{{ route('puntuaciones') }}">Puntuaciones</a></li>
                <li><a href="{{ route('grupos.index') }}">Grupos</a></li>
                @auth
                    @if (Auth::user()->rol == 'admin')
                        <li><a href="{{ route('management.index') }}">Usuarios</a></li>
                    @endif
                    <li><img id="fotoPerfil" src="{{ URL::asset('/imagenes/perfil/' . Auth::User()->foto) }}"
                            onclick="window.location.href='{{ route('perfil') }}' " alt="perfil"></li>
                @endauth
                @guest
                    <li><a href="./login">Ingresa tu cuenta</a></li>
                @else
                    @if ($title == 'Perfil')
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button id="btn-logout">Logout</button>
                        </form>
                    @endif
                @endauth
                <button onclick="location.href='{{ route('partida') }}'" type="button" class="btn">Jugar</button>
            </ul>
        </div>
    </div>
</header>
