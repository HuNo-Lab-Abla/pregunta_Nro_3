<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido, Docente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Cargar Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Cargar estilos personalizados -->
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<div class="container">
		<h1>Bienvenido, Docente</h1>
		<div class="row">
			<?php
			// Definir un arreglo de materias
			$materias = array(
				array("title" => "Matemáticas", "image" => "img/mate.png"),
				array("title" => "Física", "image" => "physics.jpg"),
				array("title" => "Química", "image" => "chemistry.jpg"),
				array("title" => "Historia", "image" => "history.jpg"),
				array("title" => "Idiomas", "image" => "languages.jpg")
			);

			// Recorrer el arreglo de materias y generar una tarjeta para cada una
			foreach ($materias as $materia) {
				echo '<div class="col-lg-4 col-md-6 col-sm-12 mb-4">';
				echo '<div class="card">';
				echo '<img class="card-img-top" src="' . $materia["image"] . '" alt="' . $materia["title"] . '">';
				echo '<div class="card-body">';
				echo '<h5 class="card-title">' . $materia["title"] . '</h5>';
				echo '<a href="#" class="btn btn-primary">Ver detalles</a>';
				echo '</div></div></div>';
			}
			?>
		</div>
	</div>
	<!-- Cargar jQuery, Popper.js y Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
