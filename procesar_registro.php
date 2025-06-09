<?php
include("conexion.php");
$nombre=$_POST['caja1'];
$apellido=$_POST['caja2'];
$edad=$_POST['caja3'];
$correo=$_POST['caja4'];
$telefono=$_POST['caja5']; 
$password=$_POST['caja6'];
$usuario=$_POST['caja7'];
$query=mysqli_query ($conect,"INSERT INTO usuarios(id, nombre, apellido, edad, correo, 
telefono, password, usuario) VALUES ('','$nombre','$apellido','$edad','$correo','$telefono','$password','$usuario')");
?>