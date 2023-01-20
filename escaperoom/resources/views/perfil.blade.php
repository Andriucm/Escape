@section('scripts')
<script>
    function editarInfo() {
        let inputNombre = document.getElementById("formNombre");
        let inputApellido = document.getElementById("formApe");
        let inputTelefono = document.getElementById("formTel");
        let submitInfo = document.getElementById("submitDatos");
        let btnCancelar = document.getElementById("cancelar");
        let btnEditarInfo = document.getElementsByClassName("editarInfo")[0];

        //Eliminar clases
        inputNombre.classList.remove("formNombre");
        inputApellido.classList.remove("formApe");
        inputTelefono.classList.remove("formTel");

        //Cambiar a editable
        inputNombre.removeAttribute('readonly', true);
        inputApellido.removeAttribute('readonly', true);
        inputTelefono.removeAttribute('readonly', true);

        //Aparecer y desaparecer botones
        submitInfo.style.display = "block";
        submitInfo.style.width = "30%";
        btnCancelar.style.display = "block";
        btnEditarInfo.style.display = "none";
    }

    function editarCuenta() {
        let inputEmail = document.getElementById("formEmail");
        let inputContra = document.getElementById("formContra");
        let submitCuenta = document.getElementById("submitCuenta");
        let btnCancelar = document.getElementById("cancel");
        let btnCambiar = document.getElementById("cambiarPW");
        let btnEditarCuenta = document.getElementsByClassName("editarAccount")[0];

        // console.log(btnCancelar);

        //Eliminar clases
        inputEmail.classList.remove("formEmail");
        inputContra.classList.remove("formContra");

        //Cambiar a editable
        inputEmail.removeAttribute('readonly');
        inputContra.removeAttribute('readonly');

        //Aparecer botones
        submitCuenta.style.display = "block";
        submitCuenta.style.width = "30%";
        btnCancelar.style.display = "block";
        btnCambiar.style.display = "block";
        btnEditarCuenta.style.display ="none";
    }

    function consultarProgreso() {
        // btn = document.getElementsByClassName("buttons")[1];
        window.location.href = '/puntuaciones';
    }

    function cancelDatos() {
        let inputNombre = document.getElementById("formNombre");
        let inputApellido = document.getElementById("formApe");
        let inputTelefono = document.getElementById("formTel");
        let submitInfo = document.getElementById("submitDatos");
        let btnCancelar = document.getElementById("cancelar");
        let btnEditarInfo = document.getElementsByClassName("editarInfo")[0];


        //Añadir clases
        inputNombre.classList.add("formNombre");
        inputApellido.classList.add("formApe");
        inputTelefono.classList.add("formTel");

        //Quitar editable
        inputNombre.setAttribute('readonly', false);
        inputApellido.setAttribute('readonly', false);
        inputTelefono.setAttribute('readonly', false);

        //Desaparecer botón
        submitInfo.style.display = "none";
        btnCancelar.style.display = "none";
        btnEditarInfo.style.display = "block";
    }
    function cancelCuenta() {
        let inputEmail = document.getElementById("formEmail");
        let inputContra = document.getElementById("formContra");
        let submitCuenta = document.getElementById("submitCuenta");
        let btnCancelar = document.getElementById("cancel");
        let btnCambiar = document.getElementById("cambiarPW");
        let btnEditarCuenta = document.getElementsByClassName("editarAccount")[0];
        let pw = document.getElementsByClassName("password")[0].style.display = "none";

        // console.log(btnCambiar.value);

        //Añadir clases
        inputEmail.classList.add("formEmail");
        inputContra.style.display = "none";

        //Quitar editable
        inputEmail.setAttribute('readonly', false);
        inputContra.setAttribute('readonly', false);

        //Desaparecer botones
        submitCuenta.style.display = "none";
        btnCancelar.style.display = "none";
        btnCambiar.style.display = "none";
        btnEditarCuenta.style.display = "block";
    }
    function password() {
        document.getElementById("formContra").style.display = "block";
        document.getElementsByClassName("password")[0].style.display = "block";
        document.getElementById("cambiarPW").style.display = "none";
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
                @error('nombre')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <label for="formApe"><b> Apellido:</b></label>
                <input type="text" id="formApe" class="formApe" name="formApe" value="<?php echo $user_surname; ?>" readonly><br><br>
                @error('apellido')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <label for="formTel"><b>Telefono:</b></label>
                <input type="text" id="formTel" class="formTel" name="formTel" value="<?php echo $user_tel; ?>" readonly><br><br>
                @error('telefono')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <div class="buttons">
                    <input type="submit" id="submitDatos" name="submitDatos" value="Enviar">
                    <button type="button" id="cancelar" onclick="cancelDatos()">Cancelar</button>
                </div>
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

            <form method="POST" action="{{ route('editarCuenta', [$id]) }}">
                @method('PATCH')
                @csrf
                <label for="formEmail"><b>Email:</b></label>
                <input type="text" id="formEmail" class="formEmail" name="formEmail" value="<?php echo $user_email; ?>" readonly><br><br>
                @error('formEmail')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <div class="password">
                    <input type="password" id="formContra" class="formContra" name="formContra" placeholder="Nueva contraseña" readonly><br><br>
                    @error('formContra')
                        <small style="color: red">{{ $message }}</small>
                        <br>
                    @enderror
                </div>
                <div class="buttons">
                    <input type="submit" id="submitCuenta" name="submitCuenta" value="Enviar">
                    <button type="button" id="cambiarPW" onclick="password()">Cambiar contraseña</button>
                    <button type="button" id="cancel" onclick="cancelCuenta()">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>