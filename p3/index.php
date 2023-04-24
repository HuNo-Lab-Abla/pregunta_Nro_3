<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-box">
		<h2>Iniciar sesión</h2>
		<form action="login.php" method="POST">
			<div class="user-box">
				<input type="text" name="username" required="">
				<label>Nombre de usuario</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" required="">
				<label>Contraseña</label>
			</div>
			<input type="submit" name="submit" value="Iniciar sesión">
		</form>
	</div>
</body>
</html>
