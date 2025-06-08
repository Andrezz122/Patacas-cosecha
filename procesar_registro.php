<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", " root@localhost", "", "tienda_videojuegos");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener y sanitizar los datos del formulario
$nombre = $conexion->real_escape_string($_POST['nombre']);
$apellido = $conexion->real_escape_string($_POST['apellido']);
$edad = (int) $_POST['edad'];
$correo = $conexion->real_escape_string($_POST['correo']);
$telefono = $conexion->real_escape_string($_POST['telefono']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encriptar contraseña
$usuario = $conexion->real_escape_string($_POST['usuario']);

// Insertar datos en la tabla usuarios
$sql = "INSERT INTO usuarios (nombre, apellido, edad, correo, telefono, password, usuario)
        VALUES ('$nombre', '$apellido', $edad, '$correo', '$telefono', '$password', '$usuario')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso. <a href='index.html'>Volver</a>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
