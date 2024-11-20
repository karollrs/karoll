<html>
	<html>
	<head>
		<title>Ejercicio 70</title>
		<meta charset="UTF-8" />

		<link rel="stylesheet" href="stilitos.css">
	</head>
	<body>
	<?php
		include 'conexion2.php'; 
		$consulta = $conexion2 -> query("SELECT nombre,Edad,Fecha,VIP,Provincia FROM compania") or die ("Ha fallado la conexión");
			while ( $registro = $consulta -> fetch_assoc() ) {
				echo '<table>'.
				"<th>nombre</th>
				 <th>Edad</th>
				 <th>Fecha</th>
				 <th>VIP</th>
				 <th>Provincia</th>".

				"<tr>".
				"<td>".$registro['nombre']."</td>".
				"<td>".$registro['Edad']."</td>".
				"<td>".$registro['Fecha']."</td>".
				"<td>".$registro['VIP']."</td>".
				"<td>".$registro['Provincia']."</td>".
			    "</tr>".
			    "</table>";
               }
			    $conexion2=null;
	?>

	<br>
	<a href="eliminar2.php" class="brayan1">Eliminar datos</a>
<a href="form.html" class="boton">Insertar datos</a>
<a href="consulta2.php" class="boton">Consultar datos</a>
<a href="busqueda.php" title = "Cerrar sesion" target="_blank" rel="nofollow" class="boton">Buscar </a> 
<a href="logout.php" title = "Cerrar sesion" target="_blank" rel="nofollow" class="brayan1">Cerrar sesion </a>

	</body>
	</html>