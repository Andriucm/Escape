<x-layout>
    <x-slot name="title">
        Inicio
    </x-slot>
    <div class="index-body">
        <div class="index1">
            <div class="intro-texto">
                <h1 class="intro1"> <b>Una aventura tan inmersiva que parece real</b></h1>
                <br>
                <h3 class="intro2">Tendrás que descubrir el secreto detrás de todas las pistas que están ocultas por el
                    edificio.</h3>
                <div class="demo">
                    <button type="button" class="button" onclick="index()">Jugar</button>
                    <h5 class="intro3">Juega la demo como invitado</h5>
                </div>
            </div>
            <div class="intro-img">
                <img src="{{ URL::asset('/imagenes/img1.png') }}" alt="img1" class="img1">
            </div>
        </div>
        <div class="index2">
            <div class="index-texto">
                <h3 class="intro4">Mas de 1.500.000 jugadores por todo el mundo</h3>
            </div>
            <div class="imgPeque">
                <img src="{{ URL::asset('/imagenes/img2.png') }}" alt="img2" class="img2">
                <img src="{{ URL::asset('/imagenes/img3.png') }}" alt="img3" class="img3">
                <img src="{{ URL::asset('/imagenes/img4.png') }}" alt="img4" class="img4">
                <img src="{{ URL::asset('/imagenes/img5.png') }}" alt="img5" class="img5">
            </div>
        </div>
        <div class="index3">
            <h1 class="titulo"> <b> Bienvenido al escape room </b></h1>
            <h3 class="desc1">Éste escape room está dirigido al departamento de electrónica con lo
                cual los retos a realizar estarán relacionados con dicha temática. A medida que vayas
                avanzando en la partida descifrarás información útil para las siguientes pruebas.
            </h3><br><br>
            <h3 class="desc2">Como investigador de nuestro centro de inteligencia tendrás que ir
                descifrando la comunicación recibida y conseguir enviar la configuración del cuadro de
                seguridad que nos piden.
            </h3><br><br>
            <h3 class="desc3">Tendrás que recibir una comunicación vía radio. En ella se te comunicará la
                localización y orientación de una antena parabólica por la que tendrás que enviar la
                configuración de un cuadro de seguridad.</h3>
        </div>
    </div>
</x-layout>
<script>
    function index() {
        window.location.href = "./play";
    }
</script>
