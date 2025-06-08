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

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $usuario = $result->fetch_assoc();
  if (password_verify($password, $usuario['password'])) {
    echo "Login correcto";
    // Aquí podrías iniciar sesión con PHP o redirigir
  } else {
    echo "Contraseña incorrecta";
  }
} else {
  echo "Usuario no encontrado";
}

$conn->close();
?>
