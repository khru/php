<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Hoja2 - Ejercicio 5</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Hoja2 - Ejercicio 5</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
	<div class="contenedor">
		<div class="ejercicio">
				<!-- Enunciado --> 
				<h3>La fecha de cualquier Domingo de Pascua se calcula de la siguiente forma:<br> Sea X el áño para el que quiere calcularse la fecha.<br>Sea A el resto de la división de X entre 19<br>Sea B el resto de la divisiónde X entre 4<br>Sea C el resto de la división de X entre 7<br>Sea D el resto de la división de (19*A+24) entre 30<br>Sea E el resto de la división de (2B+4C+6D+5) entre 7</h3>
				<hr>
					<?php
						include "funciones5.php";
						// $errores[]
						$errores = [];
						if (!$_POST) {
							include 'formulario5.php';
						} else {
							if (!isset($_POST['anio']) || empty($_POST['anio'])) {
								$errores['anio'] = "El campo está vacio";
							} elseif (!is_numeric($_POST['anio'])) {
								$errores['anio'] = "El campo no cumple el formato";
							} elseif ($_POST['anio'] <= 0 || $_POST['anio'] > PHP_INT_MAX) {
								$errores['anio'] = "El año es incalculable";
							} else {
								$x = $_POST['anio'];
							}

							if ($errores) {
								include 'formulario5.php';
							} else {
								$rest = domingo_pascua($x);
								echo "<b>La pascua es: $rest</b>";
							}
						}
					?>
				<hr>
				<div class="solucion">
						<h3>Solución</h3>
						<h3>index</h3>
							<script src="http://pastebin.com/embed_js.php?i=uUANe0MR"></script>
						<h3>formulario</h3>
							<script src="http://pastebin.com/embed_js.php?i=KMzqyZwL"></script>
						<h3>funciones</h3>
							<script src="http://pastebin.com/embed_js.php?i=fN9cy6a0"></script>
				</div>
				<br>
				<a href="#encabezado"><div class="volver">
					<h3>Volver arriba</h3>
				</div></a>
		</div>
		<hr>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>