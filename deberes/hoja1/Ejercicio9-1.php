<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 9 - hoja 1</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Ejercicio 9 - hoja 1</h1>
		</div>
		<!-- MENU -->
		<!-- CONTENIDO DE LA PÁGINA -->
	<div class="contenedor">
		<div class="ejercicio">
				<!-- Enunciado --> 
				<h3>Escribe un programa que lea un valor en radianes y los convierta a grados, minutos y segundos.</h3>
					<hr>
					<?php
						$radianes = 18.4567;
						$gradosDecimales = $radianes * 180 / pi();

						//los grados se optienen de la multiplicacion de los radianes por 180 y la división por PI
						$grados = intval($radianes * 180 / pi());

						//los minutos se optienen
						$minutos = intval(($gradosDecimales - $grados) * 60);

						$segundos = intval((((($gradosDecimales - $grados) * 60)) - $minutos) * 60);
						echo "<p> $radianes son: {$grados}º, {$minutos}', {$segundos}''.</p>";
					?>
					<hr>
				<!--div class="solucion">
						<h3>Solución</h3>

				</div>
				<br>
				<a href="#encabezado"><div class="volver">
					<h3>Volver arriba</h3>
				</div></a-->
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>