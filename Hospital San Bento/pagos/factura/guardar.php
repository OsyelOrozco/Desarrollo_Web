<?php

$conexion = new mysqli("localhost", "root", "", "Hospital");

if($conexion->connect_error){
    die("Error en la conexion: " . $conexion->connect_error);
}

$numeroFactura = $_POST['numeroFactura'];
$fechaEmision = $_POST['fechaEmision']; // Mantenemos el formato original si ya es 'YYYY-MM-DD'
$fechaVencimiento = $_POST['fechaVencimiento']; // Mantenemos el formato original si ya es 'YYYY-MM-DD'
$nombreCompleto = $_POST['nombreCompleto'];
$direccion = $_POST['direccion'];
$nit = $_POST['nit'];
$detallesProducto = $_POST['detallesProducto'];
$cantidad = $_POST['cantidad'];
$descuento = $_POST['descuento'];
$precio = $_POST['precio'];
$total = $_POST['total'];
$estadoPago = $_POST['estadoPago'];

$sql = "INSERT INTO facturas(numero_factura,fecha_emision,fecha_vencimiento,nombre_completo,direccion,nit,detalles_producto,cantidad,descuento,precio_unitario,total,estado_pago) VALUES ('$numeroFactura','$fechaEmision','$fechaVencimiento','$nombreCompleto','$direccion','$nit','$detallesProducto','$cantidad','$descuento','$precio','$total','$estadoPago')";

if($conexion->query($sql) === TRUE){
    echo "<script type='text/javascript'>
    alert('Factura creada');
    window.location.href = 'factura.php';
    </script>";
    exit();
}else{
    echo "Error al registrar factura: ". $conexion->error;
}

$conexion->close();

?>
