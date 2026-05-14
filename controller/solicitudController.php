<?php

require_once '../config/conexion.php';

$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$anio = $_POST['anio'];

$servicio = $_POST['servicio'];
$fecha_deseada = $_POST['fecha_deseada'];
$descripcion = $_POST['descripcion'];

$sqlCliente = "INSERT INTO clientes(nombre,dni,telefono,correo)
VALUES('$nombre','$dni','$telefono','$correo')";

$conexion->query($sqlCliente);

$id_cliente = $conexion->insert_id;

$sqlVehiculo = "INSERT INTO vehiculos(id_cliente,marca,modelo,placa,anio)
VALUES('$id_cliente','$marca','$modelo','$placa','$anio')";

$conexion->query($sqlVehiculo);

$id_vehiculo = $conexion->insert_id;

$sqlOrden = "INSERT INTO ordenes_trabajo(
id_cliente,
id_vehiculo,
servicio,
fecha_deseada,
descripcion,
estado
)

VALUES(
'$id_cliente',
'$id_vehiculo',
'$servicio',
'$fecha_deseada',
'$descripcion',
'Pendiente'
)";

$conexion->query($sqlOrden);

echo "
<script>
alert('Solicitud registrada correctamente');
window.location='../index.php';
</script>
";
