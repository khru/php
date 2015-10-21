<?php
	# Crear cookies
	$datos = ['web' => 'iescierva.net', 'director' => 'Antonio'];
	$duracion = time() + (60*60*24*365*2);
	setcookie("nombre", "pepe" , $duracion);
	setcookie("edad", "30",$duracion);
	setcookie("especial", serialize($datos), $duracion);

	#borrar cookie
	setcookie("nombre", null , 0);
	setcookie("edad", null,0);
	setcookie("especial", null, 0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<marquee > <title>Ejemplo de cookie</title></marquee>
	<link rel="stylesheet" href="../estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Ejemplo de cookie</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<div class="ejercicio">
				<!-- Enunciado --> 
				<hr>
				<h3>Ejemplo de cookie</h3>
				<hr>
				<h1>hola <?= $_COOKIE['nombre']; ?></h1>
				<h2>Tú edad es: <?= $_COOKIE['edad']; ?></h2>
				<?php 
					$cookie_array = unserialize($_COOKIE['especial']);
					foreach ($cookie_array as $contenido) {
						echo "<h2>$contenido<h2>";
				} ?>
				<hr>
				<!--div class="solucion">
						<h3>Solución</h3>

				</div>
				<br>
				<div class="volver">
					<h3><a href="#encabezado">Volver arriba</a></h3>
				</div-->
			</div>
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>