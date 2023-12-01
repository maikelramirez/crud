<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
 include("conexion.php");


    $sql = "SELECT*FROM clientes";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();

    ?>

    <form action="controlador_actualizar.php" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id_clientes']; ?>">
        <input type="text" require name="nombre" placeholder="ingresa tu nombre" value="<?php echo $row['nombre']; ?>"></br></br></br>
        <input type="text" require name="correo" placeholder="ingresa tu correo" value="<?php echo $row['correo']; ?>"></br></br></br>
        <button type="submit">enviar</button></br></br></br>


    </form>

</body>

</html>