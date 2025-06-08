<?php
$host = "localhost";
$db = "tienda_juegos";
$user = "tu_usuario_mysql";
$pass = "tu_contraseña_mysql";

// Conectar a MySQL
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // encriptar
$usuario = $_POST['usuario'];

// Insertar en la base de datos
$sql = "INSERT INTO usuarios (nombre, apellido, edad, correo, telefono, password, usuario)
VALUES ('$nombre', '$apellido', $edad, '$correo', '$telefono', '$password', '$usuario')";

if ($conn->query($sql) === TRUE) {
  echo "Registro exitoso";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
