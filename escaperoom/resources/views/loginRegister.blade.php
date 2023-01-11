<x-layout>
    <x-slot name="title">
        Listado alumnos
    </x-slot>

    <h1>Listado alumnos</h1>
    <div id="contenedor">

        <div id="login-box">
            <div id="login-header">
                <h2>Ya nos conocemos...</h2>
            </div>
            <form id="login-form" action="">
                <input type="text" name="username" id="login-username" placeholder="Usuario">
                <input type="password" name="password" id="login-password" placeholder="Contraseña">
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div id="register-box">
            <div id="register-header">
                <h2>¿No tienes cuenta todavia?</h2>
            </div>
            <form id="register-form" action="">
                <input type="text" name="username" id="register-username" placeholder="Usuario">
                <input type="text" name="nombre" id="register-nombre" placeholder="Nombre">
                <input type="text" name="apellido" id="register-apellido" placeholder="Apellido">
                <input type="password" name="password" id="register-password" placeholder="Contraseña">
                <input type="password" name="password2" id="register-password2" placeholder="Segunda contraseña">
                <button type="submit">Enviar</button>
            </form>
        </div>
</x-layout>
