const alumno= document.getElementById('tabla-alumnos');
const profesor=document.getElementById('tabla-profesores');

function mostrarAlumnos() {
    alumno.classList.add('flex');
    alumno.classList.remove('none');
    profesor.classList.add('none');
    profesor.classList.remove('flex');
    
}
function mostrarProfesores() {
    alumno.classList.remove('flex');
    alumno.classList.add('none');
    profesor.classList.remove('none');
    profesor.classList.add('flex');
}