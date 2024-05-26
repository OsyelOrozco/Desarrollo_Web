<?php

$host = "localhost";
$user = "root";
$password = "Iber2024/";
$database = "hospital";
$port = 3307;

$conexion = mysqli_connect($host, $user, $password, $database,$port);
if(!$conexion){
    echo "No se realizo la conexion a la base de datos, el error fue:" . mysqli_connect_error();
}

?>
