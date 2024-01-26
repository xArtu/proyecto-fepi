<?php
$enlace = mysqli_connect("localhost", "root", "xMytho6976+", "ternuritas");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombreProducto = $_POST["nombreProducto"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $stock = $_POST["stock"]; // Ajusta según tu necesidad

    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
        // Procesar la imagen
        $imagenDirectorio = "../fotos_server/";
        $nombreArchivo = $_FILES["imagen"]["name"];
        $rutaCompleta = $imagenDirectorio . $nombreArchivo;

        // Verificar si la extensión es permitida
        $extensionesPermitidas = array("jpg", "jpeg", "png", "gif");
        $extensionArchivo = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

        if (in_array($extensionArchivo, $extensionesPermitidas)) {
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaCompleta)) {
                echo "Imagen cargada correctamente.";
            } else {
                die("Error al cargar la imagen.");
            }
        } else {
            die("La extensión del archivo no está permitida.");
        }
    } else {
        echo "No se seleccionó ninguna imagen o hubo un error al subirla.";
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, categoria, imagen) VALUES ('$nombreProducto', $descripcion, '$precio', '$stock', $categoria, '$rutaCompleta')";

    if ($enlace->query($sql) === TRUE) {
        echo "Producto cargado correctamente.";
    } else {
        echo "Error al cargar el producto: " . $enlace->error;
    }
}

mysqli_close($enlace);
?>
