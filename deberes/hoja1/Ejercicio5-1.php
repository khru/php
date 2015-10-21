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
		<div class="encabezado" align="center" id="encabezado">
			<h1>Ejercicio 5 - Hoja 1</h1>
		</div>
		<!-- MENU -->
		<!--nav id="navigation" class="clearfix">
			  <ul>
			    <li><a href="#ejercicio1">Ejercicio 1</a></li>
			    <li><a href="#ejercicio2">Ejercicio 2</a></li>
			    <li><a href="#ejercicio3">Ejercicio 3</a></li>
			    <li><a href="#ejercicio4">Ejercicio 4</a></li>
			    <li><a href="#ejercicio5">Ejercicio 5</a></li>
			  </ul>
		</nav-->

		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<div class="ejercicio">
				<h3>Escribe un programa que pregunte el año actual y la edad de una persona te calcule la edad que tendrá en 2020</h3>
				<?php
					//el año del cual se espera saber la edad
					$anyo_calculo = 2020;
					//edad
					$edad = 23;
					echo "La edad a calcular es: " . $edad . "<br>";
					//año
					$anyo = 2021;
					echo "El año a actual es: " . $anyo . "<br>";

					if((is_null($edad) || is_null($anyo)) || ($edad < 0 || $anyo < 0)){
						echo "edad o año incorrectos";
					} elseif ($anyo > $anyo_calculo) {
						echo "El año introducido es superior al $anyo_calculo";
					} else {
						$total = ($anyo_calculo - $anyo) + $edad;
						echo "En $anyo_calculo la persona tendrá una edad de: " . $total . " años<br>";
					}
				?>
				<div class="solucion">
						<h3>Solución</h3>
						<script src="http://pastebin.com/embed_js.php?i=4Ei49tQc"></script>
				</div>
			</div>
			<div class="volver">
				<h3><a href="#encabezado">Volver arriba</a></h3>
			</div>
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>
