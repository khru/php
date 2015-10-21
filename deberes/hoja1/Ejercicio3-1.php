<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio - 3</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center">
			<h1>Ejercicio 3 - hoja 1</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<div class="ejercicio">
				<h3>Calcula el radio de una circunferencia</h3>
				<hr>
					<?php
						// radio
						$radio = 5;
						$longitud = 2 * pi() * $radio;
						echo $radio <= 0 ? "longitud incorrecta" : "Una circunferencia con el radio $radio , tiene como longitud " . "<b>" . round($longitud, 2). "</b>";
					?>
				<hr>
				<div class="solucion">
					<h3>Solución</h3>
					<script src="http://pastebin.com/embed_js.php?i=Qum1p4b3"></script>
				</div>
			</div>
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>
