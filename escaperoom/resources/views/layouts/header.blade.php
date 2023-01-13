<header class="header-container">
    <div class="header">
        <div class="row">
            <img src="../resources/img/logo.png" alt="Logo" class="logo">
            <ul>
                <li><a href="./puntuaciones">Puntuaciones</a></li>
                @auth
                <li><a href="./groups">Grupos</a></li>
                <li><a href="./profile">Perfil</a></li>
                @endauth
                
                @guest
                <li><a href="./register">Registro</a></li>   
                
                <li><a href="./login">Login</a></li>   
                @else
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button>Logout</button>
                </form>
                @endauth
            
                <button type="button" class="btn">Jugar</button>

            </ul>
        </div>
    </div>
</header>
