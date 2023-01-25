@section('scripts')

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
<script type="text/javascript" src="{{ URL::asset('/js/perfil.js') }}" defer></script>

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
            <form method="POST" onsubmit="return validarFormDatos()" action="{{ route('editarDatos', [$id]) }}">
                @method('PATCH')
                @csrf
                <label for="formNombre"><b>Nombre:</b></label>
                <input type="text" id="formNombre" class="formNombre" name="formNombre" value="<?php echo $user_name; ?>" readonly><br><br>
                <div class="error" id="nameErr" style="color: red; font-size:16px;"></div>
                @error('formNombre')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <label for="formApe"><b> Apellido:</b></label>
                <input type="text" id="formApe" class="formApe" name="formApe" value="<?php echo $user_surname; ?>" readonly><br><br>
                <div class="error" id="surnameErr" style="color: red; font-size:16px;"></div>
                @error('formApe')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <label for="formTel"><b>Telefono:</b></label>
                <input type="text" id="formTel" class="formTel" name="formTel" value="<?php echo $user_tel; ?>" readonly><br><br>
                <div class="error" id="telErr" style="color: red; font-size:16px;"></div>
                @error('formTel')
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

            <form method="POST" onsubmit="return validarFormCuenta()" action="{{ route('editarCuenta', [$id]) }}">
                @method('PATCH')
                @csrf
                <label for="formEmail"><b>Email:</b></label>
                <input type="text" id="formEmail" class="formEmail" name="formEmail" value="<?php echo $user_email; ?>" readonly><br><br>
                <div class="error" id="emailErr" style="color: red; font-size:16px;"></div>
                @error('formEmail')
                    <small style="color: red">{{ $message }}</small>
                    <br>
                @enderror
                <div class="password">
                    <input type="password" id="formContra" class="formContra" name="formContra" placeholder="Nueva contraseña" readonly><br><br>
                    <div class="error" id="pwErr" style="color: red; font-size:16px;"></div>
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