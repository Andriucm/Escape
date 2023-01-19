function mostrarAlumnos() {
    document.getElementById('tabla-alumnos').classList.add = 'flex';
    document.getElementById('tabla-alumnos').classList.remove = 'none';
    document.getElementById('tabla-pofesores').classList.add = 'none';
    document.getElementById('tabla-pofesores').classList.remove = 'flex';
    
}
function mostrarProfesores() {
    document.getElementById('tabla-alumnos').classList.remove = 'flex';
    document.getElementById('tabla-alumnos').classList.add = 'none';
    document.getElementById('tabla-pofesores').classList.remove = 'none';
    document.getElementById('tabla-pofesores').classList.add = 'flex';
}