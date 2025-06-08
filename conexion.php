<?php
$servername = "localhost";
$database = "tienda_virtual";
$username = "root";
$password = "";

$conect = mysqli_connect($servername, $username, $password, $database);

if (!$conect) {
	die("conexion fallida: " .mysqli_connect_error());
}

?>