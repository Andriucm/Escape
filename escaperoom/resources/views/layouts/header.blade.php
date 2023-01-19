<header class="header-container">
    <div class="header">
        <a href="{{ route('index') }}"><img src="../public/imagenes/logo.png" alt="Logo" class="logo" ></a>
        <div class="row">
            <ul>
                <li><a href="./puntuaciones">Puntuaciones</a></li>
                <li><a href="./groups">Grupos</a></li>
                @auth

                    <li><a href="./profile">Perfil</a></li>
                @endauth
                <li><a href="./management">Usuarios</a></li>
                
                @guest
                    <li><a href="./login">Ingresa tu cuenta</a></li>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button id="btn-logout">Logout</button>
                    </form>
                    
                @endauth
                <button onclick="location.href='{{ route('partida') }}'" type="button" class="btn">Jugar</button>
            </ul>
        </div>
    </div>
</header>
