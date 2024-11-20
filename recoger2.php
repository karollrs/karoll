
<?php

$nombre= $_POST['nombre'];
$Edad= $_POST['Edad'];
$Fecha=$_POST['Fecha'];
$VIP= $_POST['VIP'];
$Provincia= $_POST['Provincia'];
$Direccion= $_POST['Direccion'];

include 'conexion2.php';
$consulta = $conexion2 -> query("INSERT INTO compania(nombre,Edad,Fecha,VIP,Provincia,Direccion) VALUES ('$_REQUEST[nombre]','$_REQUEST[Edad]','$_REQUEST[Fecha]','$_REQUEST[VIP]','$_REQUEST[Provincia]','$_REQUEST[Direccion]')");

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>expreso s</title>
		<meta charset="UTF-8" />
		<title>Bienvenido</title>
		<link rel="stylesheet" href="stilitos.css">
	</head>
	<body>
<a href="actualizar4.php" class="boton">Actualizar datos</a>
<a href="eliminar2.php" class="brayan1">Eliminar datos</a>
<a href="consulta2.php" class="boton">Consultar datos</a>
<a href="busqueda.php" class="boton">Buscar</a>
<a href="logout.php" class="brayan1">Cerrar sesion</a>
	
</html>