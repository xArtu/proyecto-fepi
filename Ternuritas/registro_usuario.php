<?php
$enlace = mysqli_connect("localhost", "root", "", "ternuritas");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombreCompleto = $_POST["nombre_completo"];
    $mail = $_POST["mail"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encriptar la contraseña
    $direccionEnvio = $_POST["direccion"];
    $telefono = $_POST["telefono"];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuario (nombre_completo, mail, password, direccion_envio, telefono) VALUES ('$nombreCompleto', '$mail', '$password', '$direccionEnvio', '$telefono')";

    if ($enlace->query($sql) === TRUE) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error al registrar el usuario: " . $enlace->error;
    }
}

mysqli_close($enlace);
?>
