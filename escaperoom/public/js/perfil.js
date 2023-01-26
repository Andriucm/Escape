function printError(elemento, mensaje) {
    document.getElementById(elemento).innerHTML = mensaje;
}

function validarFormDatos() {
    let nombre = document.getElementById("formNombre").value;
    let inputNombre = document.getElementById("formNombre");
    let apellido = document.getElementById("formApe").value;
    let inputApellido = document.getElementById("formApe");
    let telefono = document.getElementById("formTel").value;
    let inputTelefono = document.getElementById("formTel");

    let nameErr = document.getElementById("nameErr");
    let surnameErr = document.getElementById("surnameErr");
    let telErr = document.getElementById("telErr");

    nameErr = true;
    surnameErr = true;
    telErr = true;

    //Validate name
    if (nombre == "") {
        inputNombre.style.border = "medium solid red";
        // inputNombre.style.borderRadius = "5%";
        printError("nameErr", "Por favor, introduce un nombre");
    } else {
        var pattern = /^[a-zA-Z]/;  //Solo letras
        if (pattern.test(nombre) === false) {
            inputNombre.style.border="medium solid red";
            // inputNombre.style.borderRadius = "5%";
            printError("nameErr", "Por favor, introduce un nombre valido");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }

    //Validate surname
    if (apellido == "") {
        inputApellido.style.border = "medium solid red";
        // inputApellido.style.borderRadius = "5%";
        printError("surnameErr", "Por favor, introduce un apellido");
    } else {
        var pattern = /^[a-zA-Z]/;  //Solo letras
        if (pattern.test(apellido) === false) {
            inputApellido.style.border = "medium solid red";
            // inputApellido.style.borderRadius = "5%";
            printError("surnameErr", "Por favor, introduce un apellido valido");
        } else {
            printError("surnameErr", "");
            surnameErr = false;
        }
    }

    //Validate telefono
    if (telefono == "") {
        inputTelefono.style.border = "medium solid red";
        // inputTelefono.style.borderRadius = "5%";
        printError("telErr", "Por favor, introduce un numero de telefono");
    } else {
        var pattern = /^\d{9}$/;  //9 digitos
        if (pattern.test(telefono) === false) {
            inputTelefono.style.border = "medium solid red";
            // inputTelefono.style.borderRadius = "5%";
            printError("telErr", "Por favor, introduce un numero de telefono valido");
        } else {
            printError("telErr", "");
            telErr = false;
        }
    }

    //Comprobar si hay errores y en caso de que no hubiese mandar a php
    if (nameErr == true || surnameErr == true || telErr == true) {
        return false;

    } else {
        return true;
    }
}



function validarFormCuenta() {
    let email = document.getElementById("formEmail").value;
    let inputEmail = document.getElementById("formEmail");
    let pw = document.getElementById("formContra").value;
    let inputPW = document.getElementById("formContra");
    let emailErr = document.getElementById("emailErr");
    let pwErr = document.getElementById("pwErr");

    //valores por defecto
    emailErr = true;
    pwErr = true;


    if (pw == "") {
        //Validate email
        if (email == "") {
            inputEmail.style.border = "medium solid red";
            inputEmail.style.borderRadius = "5%";
            printError("emailErr", "Por favor, introduce tu email");
        } else {
            var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;   //email
            if (pattern.test(email) === false) {
                inputEmail.style.border = "medium solid red";
                inputEmail.style.borderRadius = "5%";
                printError("emailErr", "Por favor, introduce un email valido");
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
            inputEmail.style.border = "medium solid red";
            inputEmail.style.borderRadius = "5%";
            printError("emailErr", "Por favor, introduce tu email");
        } else {
            var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;  //email
            if (pattern.test(email) === false) {
                inputEmail.style.border = "medium solid red";
                inputEmail.style.borderRadius = "5%";
                printError("emailErr", "Por favor, introduce un email valido");
            } else {
                printError("emailErr", "");
                emailErr = false;
            }
        }
        //Validate password
        if (pw == "") {
            inputPW.style.border = "medium solid red";
            inputPW.style.borderRadius = "5%";
            printError("pwErr", "Por favor, introduce una contraseña");
        } else {
            var pattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;  //minimo 8 caracteres, 1 letra y 1 número
            if (pattern.test(pw) === false) {
                inputPW.style.border = "medium solid red";
                inputPW.style.borderRadius = "5%";
                printError("pwErr", "Por favor, introduce una contraseña valida");
            } else {
                printError("pwErr", "");
                pwErr = false;
            }
        }
        //Comprobar si hay errores y en caso de que no hubiese mandar a php
        if (emailErr == true || pwErr == true) {
            return false;

        } else {
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
    window.location.href = '/puntuaciones';
}

function cancelDatos() {
    history.go();
    
    // let inputNombre = document.getElementById("formNombre");
    // let inputApellido = document.getElementById("formApe");
    // let inputTelefono = document.getElementById("formTel");
    // let submitInfo = document.getElementById("submitDatos");
    // let btnCancelar = document.getElementById("cancelar");
    // let btnEditarInfo = document.getElementsByClassName("editarInfo")[0];
    // document.getElementById("nameErr").innerHTML = "";
    // document.getElementById("surnameErr").innerHTML = "";
    // document.getElementById("telErr").innerHTML = "";

    // //Añadir clases
    // inputNombre.classList.add("formNombre");
    // inputApellido.classList.add("formApe");
    // inputTelefono.classList.add("formTel");

    // //Quitar editable
    // inputNombre.setAttribute('readonly', false);
    // inputApellido.setAttribute('readonly', false);
    // inputTelefono.setAttribute('readonly', false);

    // //Desaparecer botón
    // submitInfo.style.display = "none";
    // btnCancelar.style.display = "none";
    // btnEditarInfo.style.display = "block";
}

function cancelCuenta() {
    history.go();

    // let inputEmail = document.getElementById("formEmail");
    // let inputContra = document.getElementById("formContra");
    // let submitCuenta = document.getElementById("submitCuenta");
    // let btnCancelar = document.getElementById("cancel");
    // let btnCambiar = document.getElementById("cambiarPW");
    // let btnEditarCuenta = document.getElementsByClassName("editarAccount")[0];
    // document.getElementById("emailErr").innerHTML = "";
    // document.getElementById("pwErr").innerHTML = "";

    // // console.log(btnCambiar.value);

    // //Añadir clases
    // inputEmail.classList.add("formEmail");
    // inputContra.style.display = "none";

    // //Quitar editable
    // inputEmail.setAttribute('readonly', false);
    // inputContra.setAttribute('readonly', false);

    // //Desaparecer botones
    // submitCuenta.style.display = "none";
    // btnCancelar.style.display = "none";
    // btnCambiar.style.display = "none";
    // btnEditarCuenta.style.display = "block";
}

function password() {
    document.getElementById("formContra").style.display = "block";
    document.getElementsByClassName("password")[0].style.display = "block";
    document.getElementById("cambiarPW").style.display = "none";
}
