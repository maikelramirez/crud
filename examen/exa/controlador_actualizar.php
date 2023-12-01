<?php
include("conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sql = "UPDATE clientes SET nombre='$nombre',correo='$correo' WHERE id_clientes='$id'";
$resultado = $conexion->query($sql);

if ($resultado) {
    header("location:tabla.php");
} else {
    echo "error al actualizar";
}
