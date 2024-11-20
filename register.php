<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = htmlspecialchars($_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$stmt = $conn->prepare($sql);
if ($stmt->execute(['username' => $username, 'password' => $password])) {
echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
} else {
echo "Error al registrar.";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro</title>
<link rel="stylesheet" href="stilitos.css">
</head>
<body>
<h2>Registro de usuario</h2>
<form action="register.php" method="post">
<label for="username">Usuario:</label>
<input type="text" name="username" required><br>
<label for="password">Contraseña:</label>
<input type="password" name="password" required><br><br>
<button type="submit">Registrarse</button>
<p>Si ya estas registrado:</p>
<a href="login.php" class="brayan">Iniciar sesion</a>
</form>
</body>
</html>