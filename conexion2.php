<?php
$servidor='localhost';
$basedatos='almacen';
$usuario='root';
$contrasena='';

$conexion2 = new mysqli($servidor,$usuario,$contrasena,$basedatos);
if ($conexion2->connect_errno)
{
	echo"error de conexion verifique sus datos ";
}
else 
{
	echo "<h1>Operación exitosa</h1>";
}
?>