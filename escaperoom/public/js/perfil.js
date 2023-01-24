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