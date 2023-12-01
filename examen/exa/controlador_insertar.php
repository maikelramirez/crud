<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];


$sql = "INSERT INTO clientes(nombre,correo)
VALUES('$nombre','$correo')";

$resultado = $conexion->query($sql);
if ($resultado) {
    header("location:tabla.php");
}
