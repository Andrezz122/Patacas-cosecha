<?php

$servername="localhost";
$username="root";
$password="";
$database="";

$conect = mysqli_connect($servername, $username, $password, $database);

if (!$conect) {
	die("conexion fallida: " .mysqli_connect_error());
}
?>


<?php
$servername = "localhost";
$database = "observador";
$username = "root";
$password = "tienda_juegos";

$conect = mysqli_connect($servername, $username, $password, $database);

if (!$conect) {
	die("conexion fallida: " .mysqli_connect_error());
}

?>