<?php

include_once 'conexion.php';

if(isset($_POST['numero_factura']) && isset($_POST['fecha_emision']) && isset($_POST['fecha_vencimiento']) && isset($_POST['nombre_completo']) && isset($_POST['direccion']) && isset($_POST['nit']) && isset($_POST['detalles_producto']) && isset($_POST['cantidad']) && isset($_POST['precio']) && isset($_POST['descuento']) && isset($_POST['total']) && isset($_POST['estado_pago'])) {

    $numero_factura = $_POST['numero_factura'];
    $fecha_emision = $_POST['fecha_emision'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $nombre_completo = $_POST['nombre_completo'];
    $direccion = $_POST['direccion'];
    $nit = $_POST['nit'];
    $detalles_producto = $_POST['detalles_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $descuento = $_POST['descuento'];
    $total = $_POST['total'];
    $estado_pago = $_POST['estado_pago'];

    $sql = "INSERT INTO factura (NumeroFactura, FechaEmision, FechaVencimiento, NombreCompleto, Direccion, NIT, DetallesProducto, Cantidad, Precio, Descuento, Total, EstadoPago) VALUES ('$numero_factura', '$fecha_emision', '$fecha_vencimiento', '$nombre_completo', '$direccion', $nit, '$detalles_producto', $cantidad, $precio, $descuento, $total, '$estado_pago')";

    if($conexion->query($sql) === TRUE) {
        echo "<script>alert('Registro guardado');</script>";
       
    } else {
        echo "<script>alert('Error al guardar');</script>";
        echo "Error al insertar datos: " . $conexion->error;
    }

    $conexion->close();
} else {
    echo "Error: Datos del formulario no fueron ingresados correctamente";
}

?>
