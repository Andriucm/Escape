function printError(elemento, mensaje) {
    document.getElementById(elemento).innerHTML = mensaje;
}

function validarFormDatos() {
    let nombre = document.getElementById("formNombre").value;
    let apellido = document.getElementById("formApe").value;
    let telefono = document.getElementById("formTel").value;
    let nameErr = document.getElementById("nameErr");
    let surnameErr = document.getElementById("surnameErr");
    let telErr = document.getElementById("telErr");

    nameErr = true;
    surnameErr = true;
    telErr = true;

    //Validate name
    if (nombre == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var pattern = /^[a-zA-Z]/;
        if (pattern.test(nombre) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }

    //Validate surname
    if (apellido == "") {
        printError("surnameErr", "Please enter your surname");
    } else {
        var pattern = /^[a-zA-Z]/;
        if (pattern.test(apellido) === false) {
            printError("surnameErr", "Please enter a valid surname");
        } else {
            printError("surnameErr", "");
            surnameErr = false;
        }
    }

    //Validate telefono
    if (telefono == "") {
        printError("telErr", "Please enter a phone number");
    } else {
        var pattern = /^\d{9}$/;
        if (pattern.test(telefono) === false) {
            printError("telErr", "Please enter a valid phone number");
        } else {
            printError("telErr", "");
            telErr = false;
        }
    }


    if (nameErr == true || surnameErr == true || telErr == true) {
        return false;

    } else {
        return true;
    }
}



function validarFormCuenta() {
    let email = document.getElementById("formEmail").value;
    let pw = document.getElementById("formContra").value;
    let emailErr = document.getElementById("emailErr");
    let pwErr = document.getElementById("pwErr");

    emailErr = true;
    pwErr = true;


    if (pw == "") {
        //Validate email
        if (email == "") {
            printError("emailErr", "Please enter your email");
        } else {
            var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
            if (pattern.test(email) === false) {
                printError("emailErr", "Please enter a valid email");
            } else {
                printError("emailErr", "");
                emailErr = false;
            }
        }
        //Comprobar si hay errores
        if (emailErr == true) {
            console.log("Hay errores");
            return false;

        } else {
            console.log("No hay errores");
            return true;
        }
    } else {
        //Validate email
        if (email == "") {
            printError("emailErr", "Please enter your email");
        } else {
            var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
            if (pattern.test(email) === false) {
                printError("emailErr", "Please enter a valid email");
            } else {
                printError("emailErr", "");
                emailErr = false;
            }
        }
        //Validate password
        if (pw == "") {
            printError("pwErr", "Please enter your password");
        } else {
            var pattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            if (pattern.test(pw) === false) {
                printError("pwErr", "Please enter a valid password");
            } else {
                printError("pwErr", "");
                pwErr = false;
            }
        }
        //Comprobar si hay errores
        if (emailErr == true || pwErr == true) {
            console.log("Hay errores");
            return false;

        } else {
            console.log("No hay errores");
            return true;
        }
    }
}


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
    btnEditarCuenta.style.display = "none";
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
