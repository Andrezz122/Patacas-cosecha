
<?php
$servername = "localhost";
$database = "tienda_juegos";
$username = "root";
$password = "";

$conect = mysqli_connect($servername, $username, $password, $database);

if (!$conect) {
	die("conexion fallida: " .mysqli_connect_error());
}   

?>
<html>
<body>
<button>!cosas gratis!!</button>
</body>
</html>