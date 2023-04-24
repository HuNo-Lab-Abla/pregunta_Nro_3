<?php

// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "usuario";
$password = "123456";
$dbname = "mibasehugo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar si la conexión es exitosa
if (!$conn) {
	die("Error de conexión: " . mysqli_connect_error());
}

// Verificar las credenciales de inicio de sesión
if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT * FROM usuarios WHERE usuario='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 1) {
		// Credenciales de inicio de sesión válidas, obtener el rol del usuario y redirigir según el rol
		$row = mysqli_fetch_assoc($result);
		$rol = $row['rol'];
		if ($rol == "ALUMNO") {
			header("Location: alumno.php");
			exit();
		} elseif ($rol == "DOCENTE") {
			header("Location: inicio.php");
			exit();
		}
	} else {
		// Credenciales de inicio de sesión inválidas, mostrar mensaje de error
		echo "Nombre de usuario o contraseña incorrectos.";
	}
}

mysqli_close($conn);

?>
