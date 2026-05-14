<?php

session_start();

require_once '../config/conexion.php';

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios
WHERE correo='$correo'
AND password='$password'
AND estado='Activo'";

$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){

    $usuario = $resultado->fetch_assoc();

    $_SESSION['usuario'] = $usuario['nombre'];
    $_SESSION['rol'] = $usuario['rol'];

    header("Location: ../views/admin/dashboard.php");

}else{

    echo "
    <script>
        alert('Credenciales incorrectas');
        window.location='../views/admin/login.php';
    </script>
    ";
}