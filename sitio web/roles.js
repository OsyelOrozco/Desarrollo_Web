// roles.js
function ingresarComo(rol) {
    if (rol === 'administrador') {
        window.location.href = 'admin/administrador.php';
    } else if (rol === 'usuario') {
        window.location.href = 'user/usuario.php';
    } else if (rol === 'enfermera(o)') {
        window.location.href = 'enfer/enfermera.php';
    } else if (rol === 'doctor') {
        window.location.href = 'docto/doctor.php';
    }
}


