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
    <h1 style="text-align: center;">Registro de Usuario</h1>
    <main class="contenedor contenedor-medio">
        <form action="registro_usuario.php" method="post" class="formulario-pedido">
            <!-- ... Tus campos de formulario existentes ... -->

            <label class="label" for="nombre_completo">Nombre Completo: </label>
            <input class="input" id="nombre_completo" type="text" name="nombre_completo" placeholder="Ingresa tu nombre"/>

            <label class="label" for="mail">Correo electrónico</label>
            <input class="input" id="mail" type="email" name="mail" placeholder="Ingresa tu correo"/>    
            
            <label class="label" for="password">Contraseña</label>
            <input class="input" id="password" type="password" name="password" placeholder="Ingresa tu contraseña" required/>

            <label class="label" for="direccion">Dirección:</label>
            <input class="input" id="direccion" type="textarea" name="direccion" placeholder="Ingresa tu dirección" required/>

            <label class="label" for="telefono">Telefono</label>
            <input class="input" id="telefono" type="tel" name="telefono" placeholder="Ingresa tu telefono" required/>

            <input type="submit" value="Registrarse" class="button-32">
        </form>
    </main>
    
    <?php include "./componentes/navegacion.php"; ?>
</body>
</html>