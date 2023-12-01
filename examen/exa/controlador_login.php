<?php
include("conexion.php");

$correo=$_POST['nombre'];
$contraseña=$_POST['contraseña'];

$sql="SELECT*FROM administrador WHERE correo='$correo' AND contraseña='$contraseña'";

$resultado=$conexion->query($sql);
if($resultado->num_rows==1){
    header("location:insertar.php");
}else{
    echo "usuario no valido";
    header("location:../index.php");
}

?>