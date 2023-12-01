<?php
include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));

$sql="INSERT INTO administrador(nombre,apellido,correo,contraseña,foto)
VALUES('$nombre','$apellido','$correo','$contraseña','$foto')";

$resultado=$conexion->query($sql);
if($resultado){
    header("location:../index.php");
}
