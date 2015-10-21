<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 7 - Hoja 1</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Ejercicio 7 - Hoja 1</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<div class="ejercicio">
				<h3>Crear un programa que pida un número real y muestre la tabla de multiplicar correspondiente a dicho número perfectamente formateada y con un preción de 2 cifras </h3>
				<hr>
				<?php 
					$num = 7.52;
					echo "<table align='center'>";
					echo "<tr>";
						echo "<th colspan='5'> La tabla de $num</th>";
					echo "</tr>";
					for ($i=1; $i <= 10 ; $i++) { 
						# Bucle para realizar la tabla
						# $total = ($i * $num);
						$total = round($i * $num,2);

						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td> * </td>";
							echo "<td>$num</td>";
							echo "<td> = </td>";
							echo "<td>$total</td>";
						echo "</tr>";
					}
					echo "</table>";
				?>
				<hr>
				<div class="solucion">
						<h3>Solución</h3>
						<script src="http://pastebin.com/embed_js.php?i=uxW9wnN9"></script>
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
