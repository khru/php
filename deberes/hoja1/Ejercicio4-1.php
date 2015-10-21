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
			<h1>Ejercicio 4 - hoja 1</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<div class="ejercicio">
				<h3>Calcula la la fuerza de atracción de dos cuerpos con masa M1 y M2 respectivamente sabiendo las masas en kg y la distancia en metros y teniendo en cuenta que la formula de la grabedad universal </h3>
				<?php 
					// Masas (Kilograms)
					$m1 = 5000;
					echo "La masa del Cuerpo 1 es de: " . $m1 . "<br>";
					$m2 = 5000;
					echo "La masa del Cuerpo 2 es de: " . $m2 . "<br>";
					// Distancia (meters)
					$r = 100;
					echo "La Distancia entre los 2 cuerpos es de: " . $r . "<br>";
					// POW es la función de elevación
					$gravedadUniversal = 6.6726 * pow(10, -11);
					if ((is_null($m1) || is_null($m2)) || ($m1 < 0 || $m2 < 0)) {
						echo "El valor introducido es erroneo";
					} else {
						$total = $gravedadUniversal * (($m1 * $m2)/pow($r, 2));
						echo "Fuerza de atracción entre las masas es de: " . $total . "<br>";
					}
				?>
				<hr>
				<div class="solucion">
						<h3>Solución</h3>
						<script src="http://pastebin.com/embed_js.php?i=cRdc72Pj"></script>
				</div>
				<a href="#encabezado"><div class="volver">
				<h3>Volver arriba</h3></a>
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