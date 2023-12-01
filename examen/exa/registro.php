<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>
    <form action="controlador_registro.php" enctype="multipart/form-data" method="POST">
        <h2>Registrarse</h2>

        <input type="text" require name="nombre" placeholder="ingresa tu nombre"></br></br></br>
        <input type="text" require name="apellido" placeholder="ingresa tu apellido"></br></br></br>
        <input type="text" require name="correo" placeholder="ingresa tu correo"></br></br></br>
        <input type="password" require name="contraseña" placeholder="ingresa tu contraseña"></br></br></br>
        <input type="file" require name="foto"></br></br></br>
        <button type="submit">Registrate</button></br></br></br>
        <a href="../index.php">¡Quieres inicar! Inicia sesion aqui </a></br></br></br>


    </form>
</body>

</html>