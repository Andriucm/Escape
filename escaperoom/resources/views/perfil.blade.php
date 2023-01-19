@section('scripts')
<script>
    function editarInfo() {
        let inputNombre = document.getElementById("formNombre");
        let inputApellido = document.getElementById("formApe");
        let inputTelefono = document.getElementById("formTel");
        let submitInfo = document.getElementById("submitDatos");
        let form = document.getElementById("form");

        //Eliminar clases
        inputNombre.classList.remove("formNombre");
        inputApellido.classList.remove("formApe");
        inputTelefono.classList.remove("formTel");

        //Cambiar a editable
        inputNombre.removeAttribute('readonly', true);
        inputApellido.removeAttribute('readonly', true);
        inputTelefono.removeAttribute('readonly', true);

        //Aparecer botón
        submitInfo.style.display = "block";


        // inputNombre.addEventListener("change", function() {
        //     // e.preventDefault();
        //     submitInfo.addEventListener("click", function(e) {
        //         e.preventDefault();
        //         console.log("change");
        //         let nombre = document.getElementById("formNombre").value;
        //         let apellido = document.getElementById("formApe").value;
        //         let tel = document.getElementById("formTel").value;

        //         inputNombre.classList.add("formNombre");
        //         inputApellido.classList.add("formApe");
        //         inputTelefono.classList.add("formTel");

        //         inputNombre.setAttribute('readonly', true);
        //         inputApellido.setAttribute('readonly', true);
        //         inputTelefono.setAttribute('readonly', true);
        //     });
        // });

        // inputApellido.addEventListener("change", function() {
        //     // e.preventDefault();
        //     submitInfo.addEventListener("click", function(e) {
        //         e.preventDefault();
        //         console.log("change");
        //         let nombre = document.getElementById("formNombre").value;
        //         let apellido = document.getElementById("formApe").value;
        //         let tel = document.getElementById("formTel").value;

        //         inputNombre.classList.add("formNombre");
        //         inputApellido.classList.add("formApe");
        //         inputTelefono.classList.add("formTel");

        //         inputNombre.setAttribute('readonly', true);
        //         inputApellido.setAttribute('readonly', true);
        //         inputTelefono.setAttribute('readonly', true);
        //     });
        // });

        // inputTelefono.addEventListener("change", function() {
        //     // e.preventDefault();
        //     submitInfo.addEventListener("click", function(e) {
        //         e.preventDefault();
        //         console.log("change");
        //         let nombre = document.getElementById("formNombre").value;
        //         let apellido = document.getElementById("formApe").value;
        //         let tel = document.getElementById("formTel").value;

        //         inputNombre.classList.add("formNombre");
        //         inputApellido.classList.add("formApe");
        //         inputTelefono.classList.add("formTel");

        //         inputNombre.setAttribute('readonly', true);
        //         inputApellido.setAttribute('readonly', true);
        //         inputTelefono.setAttribute('readonly', true);
        //     });
        // });
    }

    function editarCuenta() {
        let inputEmail = document.getElementById("formEmail");
        let inputContra = document.getElementById("formContra");
        let submitCuenta = document.getElementById("submitCuenta");

        //Eliminar clases
        inputEmail.classList.remove("formEmail");
        inputContra.classList.remove("formContra");

        //Cambiar a editable
        inputEmail.removeAttribute('readonly');
        inputContra.removeAttribute('readonly');

        //Aparecer botón
        submitCuenta.style.display = "block";

        // inputEmail.addEventListener("change", function() {
        //     // e.preventDefault();
        //     submitCuenta.addEventListener("click", function(e) {
        //         e.preventDefault();
        //         console.log("change");
        //         let email = document.getElementById("formEmail").value;
        //         let contra = document.getElementById("formContra").value;

        //         inputEmail.classList.add("formEmail");
        //         inputContra.classList.add("formContra");

        //         inputEmail.setAttribute('readonly', true);
        //         inputContra.setAttribute('readonly', true);
        //     });
        // });

        // inputContra.addEventListener("change", function() {
        //     // e.preventDefault();
        //     submitCuenta.addEventListener("click", function(e) {
        //         e.preventDefault();
        //         console.log("change");
        //         let email = document.getElementById("formEmail").value;
        //         let contra = document.getElementById("formContra").value;

        //         inputEmail.classList.add("formEmail");
        //         inputContra.classList.add("formContra");

        //         inputEmail.setAttribute('readonly', true);
        //         inputContra.setAttribute('readonly', true);
        //     });
        // });
    }

    function consultarProgreso() {
        window.location.href = '/puntuaciones';
    }
</script>
<?php 
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

// Get the currently authenticated user...
$user = Auth::user();

$id = $user->codUsuario;
$user_name = $user->nombre;
$user_surname = $user->apellido;
$user_tel = $user->telefono;

$user_email = $user->email;
$user_password = $user->password;
$user_rol = $user->rol;

// if (isset($_POST['submitDatos'])){
//     var_dump("enviado");
// } else {
//     var_dump("Fallo");
// }


// if(isset($_POST['submitDatos'])){
//     var_dump ("Hola");
//     // var_dump ($_GET['formNombre']);
// }


?>

<x-layout>
    <x-slot name="title">
        Perfil
    </x-slot>
    <div class="perfil-intro">
        <img src="{{URL::asset('/imagenes/logo.png')}}" class="fotoPerfil">
        <div class="informacion">
            <h1 style="color: white;" class="nombre"><?php echo $user_name?></h1>
            <h1 style="color: white;" class="apellido"><?php echo $user_surname ?></h1>
            <h2 style="color: gray;" class="rol"><?php echo $user_rol ?></h2>
        </div>
    </div>
    <div class="perfil-body">
        <div class="datos">
            <div class="intro-datos">
                <i class="fa fa-user"> <b>Información</b></i>
                <button type="button" class="editarInfo" onclick="editarInfo()">Editar</button>
            </div>
            <hr>
            <form method="POST" action="{{ route('editarDatos', [$id]) }}">
                @method('PATCH')
                @csrf
                <label for="formNombre"><b>Nombre:</b></label>
                <input type="text" id="formNombre" class="formNombre" name="formNombre" value="<?php echo $user_name; ?>" readonly><br><br>
                <label for="formApe"><b> Apellido:</b></label>
                <input type="text" id="formApe" class="formApe" name="formApe" value="<?php echo $user_surname; ?>" readonly><br><br>
                <label for="formTel"><b>Telefono:</b></label>
                <input type="text" id="formTel" class="formTel" name="formTel" value="<?php echo $user_tel; ?>" readonly><br><br>
                <input type="submit" id="submitDatos" name="submitDatos" value="Enviar">
                <button type="button" id="cancelar">Cancelar</button>
            </form>
        </div>
        <br><br>
        <div class="progreso">
            <p>Consultar progreso</p>
            <button type="button" class="view" onclick="consultarProgreso()">Ver</button>
        </div>
        <br><br>
        <div class="cuenta">
            <div class="intro-cuenta">
                <b> Cuenta</b>
                <button type="button" class="editarAccount" onclick="editarCuenta()">Editar</button>
            </div>
            <hr>
            <form action="">
                <label for="formEmail"><b>Email:</b></label>
                <input type="text" id="formEmail" class="formEmail" name="formEmail" value="<?php echo $user_email; ?>" readonly><br><br>
                <label for="formcontra"><b>Contraseña:</b></label>
                <input type="text" id="formContra" class="formContra" name="formContra" value="saray123" readonly><br><br>
                <button type="button" id="submitCuenta">Enviar</button>
            </form>
        </div>
    </div>
</x-layout>