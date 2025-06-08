<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "tu_usuario", "tu_contraseña", "tu_base_de_datos");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$correo = $conexion->real_escape_string($_POST['correo']);
$password = $_POST['password'];

// Buscar usuario por correo
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();
    // Verificar contraseña
    if (password_verify($password, $usuario['password'])) {
        echo "Inicio de sesión exitoso. ¡Bienvenido, " . $usuario['nombre'] . "!";
        // Aquí podrías redirigir con header() o iniciar sesión
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Correo no registrado.";
}

$conexion->close();
?>
