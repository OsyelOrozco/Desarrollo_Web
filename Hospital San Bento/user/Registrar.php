<?php

include_once 'Cconexion.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['gender'])){

    $usuario = $_POST['username'];
    $contraseña = $_POST['password'];
    $correo = $_POST['email'];
    $telefono =$_POST['phone'];
    $sexo = $_POST['gender'];

    $sql = "INSERT INTO registro (usuario, contraseña, correo, telefono, sexo) values ('$usuario', '$contraseña', '$correo',
    '$telefono', '$sexo')";

    if($conexion -> query($sql) === TRUE){
        header("Location: usuario.php");

    }else{
        echo"Error al insertar datos: " . $conexion->error;

    }

    $conexion ->close();
}else{
    echo"Error: Datos del formulario no fueron ingresados correctamente";
}

?>
