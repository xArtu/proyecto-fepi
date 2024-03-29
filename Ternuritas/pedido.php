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
    <h1 style="text-align: center;">Datos de pedido</h1>
    <main class="contenedor contenedor-pedido">
        <form action="" class="formulario-pedido">
            <label class="label" for="correo">Correo electrónico</label>
            <input class="input" id="correo" type="email" placeholder="Ingresa tu correo"/>

            <label class="label" for="producto">Nombre de producto</label>
            <input class="input" id="producto" type="text" placeholder="Ingresa el nombre"/>

            <label class="label" for="categoria">Categoría</label>
            <select class="input" id="categoria">
                <option disabled selected>Selecciona una opción</option>
                <option value="peluche">Peluche</option>
                <option value="llavero">Llavero</option>
                <option value="ramo">Ramo</option>
            </select>
            <label class="label" >Tamaño</label>
            <div class="formulario-opciones">
                <label class="label" for="s">S:</label>
                <input class="radio" type="radio" id="s" name="medida" value="S">
                <label class="label" for="m">M:</label>
                <input class="radio" type="radio" id="m" name="medida" value="M">
                <label class="label" for="l">L:</label>
                <input class="radio" type="radio" id="l" name="medida" value="L">
            </div>
            <label class="label" for="detalles">Detalles</label>
            <textarea class="input" id="detalles" placeholder="Ingres algún detalle especial al pedido"></textarea>
            <label class="label" for="imagen">Sube una imagen</label>
            <input class="input" id="imagen" type="file"/>
            <label class="label" for="direccion">Dirección</label>
            <input class="input" id="direccion" type="text" disabled/>
            <label class="label" for="telefono">Teléfono</label>
            <input class="input" id="telefono" type="tel" disabled/>

            <a href="" class="button-32" style="margin-top: 1.1rem;">Completar pedido</a>
        </form>
        <div>
            <img class="imagen-pedido" src="/img/header-2.jpg" alt="Imagen de pedido">
            <div class="contenedor-datos">
                <label class="label" for="medidas">Medidas</label>
                <input class="input" id="medidas" type="text" disabled/>
                <label class="label" for="precio">Precio</label>
                <input class="input" id="precio" type="text" disabled/>
            </div>
        </div>
    </main>
    <?php include "./componentes/navegacion.php"; ?>
</body>
</html>