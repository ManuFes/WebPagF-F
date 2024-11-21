<?php
// Mostrar errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Iniciar sesión para manejo de notificaciones
session_start();

// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario configurado en MySQL
$password = "F&F2024!Secure@Db"; // Contraseña del usuario
$dbname = "F&F"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitizar los datos del formulario
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encriptar contraseña

    // Comprobar si el email ya existe
    $checkEmailQuery = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // Correo ya registrado
        $_SESSION['register_error'] = "El correo ya está registrado. Por favor, intenta con otro.";
    } else {
        // Insertar datos en la tabla usuarios
        $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['register_success'] = "Registro exitoso. ¡Bienvenido, $username!";
        } else {
            $_SESSION['register_error'] = "Error al registrar: " . $conn->error;
        }
    }
} else {
    $_SESSION['register_error'] = "Método HTTP no permitido.";
}

// Cerrar conexión
$conn->close();

// Redirigir de vuelta a la página principal
header("Location: ../index.php");
exit;
?>
