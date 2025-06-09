
<?php
$servername = "localhost";
$database = "tienda_juegos";
$username = "root";
$password = "";

$conect = mysqli_connect($servername, $database, $username, $password);

if (!$conect) {
	die("conexion fallida: " .mysqli_connect_error());
}

?>