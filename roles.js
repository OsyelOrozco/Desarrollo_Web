// roles.js
function ingresarComo(rol) {
    if (rol === 'administrador') {
        window.location.href = 'administrador/index.html';
    } else if (rol === 'usuario') {
        window.location.href = 'user/usuario.html';
    } else if (rol === 'enfermera(o)') {
        window.location.href = 'enfermera/index.html';
    } else if (rol === 'doctor') {
        window.location.href = 'Doctor/index.html';
    }
}


