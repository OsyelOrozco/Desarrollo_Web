<?php

session_start();

include_once 'Cconexion.php';

if(isset($_POST['usuario'], $_POST['contraseña'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Consulta SQL para verificar si el usuario y la contraseña son correctos
    $sql = "SELECT * FROM registro WHERE usuario = '$usuario'";
    $result = $conexion->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        // Verificar la contraseña usando password_verify
        if(password_verify($contraseña, $row['contraseña'])){
            // Inicio de sesión exitoso, redireccionar a la página principal o panel de control
            $_SESSION['loggedin'] = true;
            $_SESSION['usuario'] = $usuario;
            header("Location: recuperar.php");
            exit;
        }
        header("Location: recuperar.php");
    }else{
        // Usuario no encontrado
        echo "Usuario no encontrado";
    }
}else{
    // Datos del formulario no enviados
    echo "Por favor, complete el formulario de inicio de sesión";
}

$conexion -> close();

?>
