<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión</title>
</head>
<body>
    <?php
    $enlace = mysqli_connect("localhost", "root", "xMytho6976", "ternuritas");

    if(!$enlace){
        die("No se pudo conectar a la base de datos".mysqli_error($e));
    } else{
        echo("conexión establecidada");
    }

    echo "Conexion exitosa";
    mysqli_close($enlace);
    ?>
</body>
</html>