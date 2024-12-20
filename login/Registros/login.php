<?php
// Habilitar errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Iniciar sesión para manejar notificaciones
session_start();

// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario configurado
$password = "F&F2024!Secure@Db"; // Contraseña configurada
$dbname = "F&F"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger y sanitizar los datos ingresados
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password']; // No encriptamos aquí porque lo compararemos con un hash en la BD

    // Consultar si el usuario existe
    $sql = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Obtener datos del usuario
        $user = $result->fetch_assoc();

        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {
            // Almacenar éxito en sesión
            $_SESSION['login_success'] = "Logueo exitoso, bienvenido $username.";
            header("Location: ../../index.php"); // Redirigir al index.php del directorio raíz
            exit();
        } else {
            // Contraseña incorrecta
            $_SESSION['login_error'] = "Error: Contraseña incorrecta.";
            header("Location: ./index.php"); // Volver al login si hay error
            exit();
        }
    } else {
        // Usuario no encontrado
        $_SESSION['login_error'] = "Error: El usuario no existe.";
        header("Location: ./index.php"); // Volver al login si hay error
        exit();
    }
} else {
    // Método HTTP no permitido
    $_SESSION['login_error'] = "Método HTTP no permitido.";
    header("Location: ./index.php"); // Volver al login si hay error
    exit();
}

// Cerrar conexión
$conn->close();
?>
