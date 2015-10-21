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
			<h1>Ejercicio 8 - hoja 1</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<div class="ejercicio">
				<h3>Mostrar en una tabla el cuadrado y el cubo de los 5 primeros números que sigan al introducido enteros</h3>
				<hr>
				<?php
					# Introducimos un número
					$num = -1.5;

					# comprobamos si el número es un entero o no, si lo es, obtenemos la parte entera
					if(is_float($num)) {
						$num = intval($num);
					}
					# Creación de la tabla
					echo "<table border='1' align='center'>";
					echo "<tr>";
					echo "<td>Número</td>";
					echo "<td>Cuadrado</td>";
					echo "<td>Cubo</td>";
					echo "</tr>";
					# Comprobamos si el número es 0 o superior para hacer un bucle que incremente o decremente
					# puesto que los 5 siguientes número de -1 son, -2, -3, -4, -5, -6 no el 0, 1, 2, 3 ,4.
					if ($num >= 0 && $num <= PHP_INT_MAX) {
						$num += 1;
						# Inicializamos la variable final, la cual contendrá el número al que tendrá que llegar el bucle
						$final = ($num + 5);

						for ($i = $num; $i < $final; $i++) { 
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>" . pow($i,2) . "</td>";
							echo "<td>" . pow($i, 3) . "</td>";
						}
					} elseif ($num < 0 && $num >= -2147483648) {
						$num -= 1;
						# Inicializamos la variable final, la cual contendrá el número al que tendrá que llegar el bucle
						$final = ($num - 5);
						for ($i = $num; $i > $final; $i--) {
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>" . pow($i,2) . "</td>";
							echo "<td>" . pow($i, 3) . "</td>";
						}
					} else{
						echo "El número introducido no se puede procesar";
					}
					echo "</table>"
				?>
				<hr>
				<div class="solucion">
						<h3>Solución</h3>
						<script src="http://pastebin.com/embed_js.php?i=XMNHEsr6"></script>
				</div>
				<br>
				<div class="volver">
					<h3><a href="#encabezado">Volver arriba</a></h3>
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
