<?php

$servername="localhost";
$username="root";
$password="";
$database="tienda_juegos";

$conect = mysqli_connect($servername, $username, $password, $database);

if (!$conect) {
	die("conexion fallida: " .mysqli_connect_error());
}
?>