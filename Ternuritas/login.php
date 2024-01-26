<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las credenciales del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Conectar a la base de datos (ajusta estos valores según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "xMytho6976+";
    $database = "ternuritas";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Realizar la consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM usuario WHERE mail = '$correo' AND password = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario válido, iniciar sesión y almacenar información en la variable de sesión
        $row = $result->fetch_assoc();
        $_SESSION['nombre_usuario'] = $row['nombre_completo'];
        header("Location: pedido.php"); // Redirigir a la página principal después del inicio de sesión
        exit();
    } else {
        // Usuario no válido, muestra un mensaje de error o realiza alguna acción adecuada
        echo "Credenciales inválidas";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>

?>
