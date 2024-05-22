document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('form').addEventListener('submit', function(event) {
        var usuario = document.querySelector('input[name="usuario"]').value;
        var contrasena = document.querySelector('input[name="contrasena"]').value;

        // Verificación del lado del cliente (no segura para producción)
        if (usuario === 'iber' && contrasena === '123') {
            alert('Bienvenido, ' + usuario + '!');
            // Redirección al menú del usuario
            window.location.href = 'Menu/menuusuario.html';
        } else {
            alert('El usuario no existe');
            // Evita que el formulario se envíe para que no interfiera con la autenticación del servidor
            event.preventDefault();
        }
    });
});


