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
    <h1 style="text-align: center;">Contáctanos</h1>
    <main class="contenedor-medio contenedor-grid">
        <a href="">
            <div class="card-whatsapp">
                <img src="./img/whatsapp.svg" alt="Icono whatsapp" width="50px" height="50px">
                <p>Envíanos un mensaje directo por <strong>Whatsapp.</strong></p>
            </div>
        </a>
        <a href="">
            <div class="card-telefono">
                <img src="./img/telephone.svg" alt="Icono telefono" width="50px" height="50px">
                <p>Puedes marcar por <strong>teléfono</strong> para más información.</p>
            </div>
        </a>
        <div class="card-formulario">
            <form class="formulario contenedor-medio">
                <label class="label" for="nombre">Nombre</label>
                <input class="input" id="nombre" type="text" placeholder="Ingresa tu nombre"/>
                <label class="label" for="apellido">Apellido</label>
                <input class="input" id="apellido" type="text" placeholder="Ingresa tu apellido"/>
                <label class="label" for="correo">Correo</label>
                <input class="input" id="correo" type="email" placeholder="Ingresa tu correo"/>
                <label class="label" for="mensaje">Mensaje</label>
                <textarea class="textarea" name="mensaje" id="mensaje" placeholder="Déjanos tu mensaje"></textarea>
                <a class="button-32" style="margin-top: 2rem;">Enviar</a>
            </form>
        </div>
    </main>

    <?php include "./componentes/navegacion.php"; ?>
</body>
</html>