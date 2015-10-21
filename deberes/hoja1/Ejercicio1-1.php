<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio - 1</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center">
			<h1>Ejercicio 1 - Hoja de ejercicios 1</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<!-- ENUNCIADO -->
			<h2>Dado un valor en peseta, convertirlo a euros. La solución deberá tener dos decimales.</h2>
			<hr>
			<h3>Conversión de PTAS a €</h3>
			<?php
				/*
				 * 1€ = 166.39 Ptas
				 * 1 Pta = 0.006 €
				 * 20 Ptas is a coin
				 */
				$peseta = 10.36;
				echo $peseta <= 0 ? "valor incorrecto <br>" : "$peseta ptas, en euros son: " . round($peseta * 0.006, 2) . "<hr>";
			?>
			<br>
			<div class="solucion">
				<div align="center">
					<h3>Solución</h3>
				</div>
				<script src="http://pastebin.com/embed_js.php?i=5TnvJFMC"></script>
				<!--img src="img/1.png" alt="solucion"><br-->
			</div>
		</div>

	</div>
	<div class="box">
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
	
</body>
</html>