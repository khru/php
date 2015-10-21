<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio - 2</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center">
			<h1>Ejercicio 2 - Hoja de ejercicios 1</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<h3>Dada una temperatura en grados Celsius, convierta a Fahrenheit, mostrando por pantalla un mensaje del tipo "xxx.xx grados <br>Celsius son yyy.yy grados Fahrenheit"</h3>
			<div class="ejercicio">
			<h3>Conversor de grados Celsius a Fahrenheit</h3>
			<hr>
			<?php
				// Degrees on a celsius scale
				$degrees = 33.8;
				echo $degrees <= 0 ? "valor incorrecto" : round(($degrees * 9/5) + 32, 2) . " Grados Fahrenheit<hr>"
			 ?>
			 <div class="solucion">
					<h3>Solución</h3>
				<script src="http://pastebin.com/embed_js.php?i=MHLf8Lm7"></script>
			</div>
			</script>
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>