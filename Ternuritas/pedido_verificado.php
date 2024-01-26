<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/css.css">
    <title>Ternuritas en la Web</title>
</head>
<body>
    <?php include "./componentes/navegacion.php"; ?>
    <h1 style="text-align: center;">Inicio de Sesión</h1>
    <main class="contenedor contenedor-medio">
        <?php
        // Verificar si el usuario ha iniciado sesión
        if (isset($_SESSION['nombre_usuario'])) {
            echo '<p>Bienvenido, ' . $_SESSION['nombre_usuario'] . '!</p>';
            include "formulario_pedido.php"; // Incluir el formulario de pedido
        } else {
            // Mostrar el formulario de inicio de sesión si el usuario no ha iniciado sesión
            echo '<form action="login.php" class="formulario-pedido" method="post">';
            echo '<label class="label" for="correo">Correo electrónico</label>';
            echo '<input class="input" id="correo" type="email" name="correo" placeholder="Ingresa tu correo" required/>';

            echo '<label class="label" for="contrasena">Contraseña</label>';
            echo '<input class="input" id="contrasena" type="password" name="contrasena" placeholder="Ingresa tu contraseña" required/>';
            
            echo '<input type="submit" value="Iniciar Sesión" class="button-32" style="margin-top: 1.1rem;">';
            echo '<div class="registro"> ';
            echo '<span>¿Eres nuevo? </span><a href="registro_sesion.php">registro</a>';
            echo '</div>';
            echo '</form>';
        }
        ?>
    </main>
    <?php include "./componentes/navegacion.php"; ?>
</body>
</html>
