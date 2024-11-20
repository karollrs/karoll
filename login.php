<?php
include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $conn->prepare($sql);
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user && password_verify($password, $user['password'])) {
$_SESSION['username'] = $user['username'];
header("Location: form.html");
exit();
} else {
echo "Usuario o contraseña incorrectos.";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inicio de sesión</title>
<link rel="stylesheet" href="stilitos.css">
</head>
<body>
<h2>Iniciar sesión</h2>
Realice el paso a paso y después realice un video de 30 seg donde se evidencie que se registra y
puede ingresar.
<form action="login.php" method="post">
<label for="username">Usuario:</label>
<input type="text" name="username" required><br><br><br>
<label for="password">Contraseña:</label>
<input type="password" name="password" required><br><br><br>
<button type="submit" class="boton">Iniciar sesión</button>
</form>
</body>
</html>