<html>
	<head>
		<title>Ejercicio  - Update</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="stilitos.css">
	</head>
	<body>
	<h1>Actualizacion de datos</h1>
		<form action="actualizar5.php" method="post">
			<select name="nombreOriginal" >
			<?php
				include 'conexion2.php';
				$consulta = $conexion2 -> query ("SELECT nombre FROM compania ORDER BY nombre ASC") or die ("Ha fallado la conexión");
					while ( $registro = $consulta -> fetch_assoc()) {
						echo'<option>'.$registro['nombre'].'</option>';
					}
			?>
			</select>
		
			<input type="text" name="nuevoNombre" placeholder="Nuevo valor" class="brayan2"/><br/><br>
			<input type="submit" value="Actualizar" class="brayan" />
		</form>
	</body>
</html>
