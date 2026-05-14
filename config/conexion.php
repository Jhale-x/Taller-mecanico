<?php

$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "taller_mecanico"
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
