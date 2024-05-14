<?php
$serverName = "DESKTOP-NV5P6VP\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "Ejemplo",
    "Uid" => "sa",
    "PWD" => "Iber2024"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die('Conexión fallida: ' . sqlsrv_errors());
}

echo "Conexión exitosa";
?>
