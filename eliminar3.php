<html>
	<head>
		<title>Ejercicio - DELETE</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="stilitos.css">
	</head>
	<style>
		.boton{
			background-color: #4caf50;
			color: #fff;
			padding: 10 px 20px;
			border: none; 
			border-radius: 5px;
			cursor: pointer;
			text-decoration: none;
		}
		
			.boton:hover{
				background-color: #3e8e41;
		}
	</style>
	<body>
		<?php
			include 'conexion2.php';
			$consulta = $conexion2 -> query ("DELETE FROM compania WHERE nombre = '{$_POST['nombreOriginal']}'") or die ("Ha fallado la conexión");
			$conexion = null;
			echo 'borrado!!';
		?>
		<a href="actualizar4.php" class="boton">Actualizar datos</a>
<a href="form.html" class="boton">Insertar datos</a>
<a href="consulta2.php" class="boton">Consultar datos</a>
<a href="busqueda.php" title = "Cerrar sesion" target="_blank" rel="nofollow" class="boton">Buscar </a>
<a href="logout.php" title = "Cerrar sesion" target="_blank" rel="nofollow" class="boton">Cerrar sesion </a>

	</body>
	
</html>