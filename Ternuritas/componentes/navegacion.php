<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
<nav class="navegacion contenedor">
    <div class="navegacion__titulo">
        <h1>Ternuritas en la Web</h1>
    </div>
    <ul class="navegacion__opciones">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="catalogo.php">Catálogo</a></li>
        <li><a href="nosotros.php">Sobre nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="pedido_verificado.php" class="button-32">Realizar pedido</a></li>
    </ul>
    <div class="navegacion__usuario">
        <ul class="navegacion__opciones">
            <?php
            if (isset($_SESSION['nombre_usuario'])) {
                // Si hay una sesión activa, muestra el nombre de usuario
                echo '<li><a href="#">' . $_SESSION['nombre_usuario'] . '</a></li>';
            } else {
                // Si no hay una sesión activa, muestra el enlace de inicio de sesión
                echo '<li><a href="iniciar_sesion.php" id="iniciarSesion">Iniciar sesión</a></li>';
            }
            ?>
        </ul>
    </div>
</nav>