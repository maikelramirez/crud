<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabla.css">
    <title>Document</title>
</head>

<body>

    <table border="collapse">
        <thead>

            <th>id</th>
            <th>nombre</th>
            <th>correo</th>
            <th>modificar</th>
            <th>eliminar</th>
        </thead>

        <a class="btn" href="insertar.php">Insertar un Nuevo cliente</a>
        <tbody>
            <?php include("conexion.php");


            $sql = "SELECT*FROM clientes";
            $resultado = $conexion->query($sql);
            while ($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id_clientes'] ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td class="icon"><a href="actualizar.php?id=<?php echo $row['id_clientes'] ?>"><img src="img/editar.svg" alt=""></a></td>
                    <td class="icon"><a href="controlador_eliminar.php?id=<?php echo $row['id_clientes'] ?>"><img src="img/eliminar.svg" alt=""></a></td>

                </tr>



            <?php }

            ?>

        </tbody>
    </table>


</body>

</html>