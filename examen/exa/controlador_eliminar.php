<?php
include ("conexion.php");
$id=$_GET['id'];
$sql="DELETE FROM clientes WHERE id_clientes='$id'";
$resultado=$conexion->query($sql);

if($resultado){
    header("location:tabla.php");
}else{
    echo "error al eliminar";
}
