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
    <h1 style="text-align: center;">Catálogo de nuestros productos</h1>
    <main class="contenedor contenedor-galeria">
        <?php
        // Realizar la consulta
        $servername = "localhost";
        $username = "root";
        $password = "xMytho6976+";
        $database = "ternuritas";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Iterar sobre los resultados y mostrar cada producto
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card-galeria">';
                
                // Ajustar la ruta de la imagen según la estructura de tu proyecto
                echo '<img src="fotos_server/' . $row["imagen"] . '" alt="Imagen de galería">';
                
                echo '<h3>' . $row["nombre"] . '</h3>';
                echo '<p>' . $row["descripcion"] . '</p>';
                echo '<span>' . $row["categoria"] . '</span>';
                echo '</div>';
            }
        } else {
            echo "No hay productos disponibles.";
        }
        
        // Cerrar la conexión
        $conn->close();
        ?>
    </main>
<?php include "./componentes/footer.php"; ?>
</body>
</html>
