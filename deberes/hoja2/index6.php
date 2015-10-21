<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Hoja2 - Ejercicio 6</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Hoja2 - Ejercicio 6</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
	<div class="contenedor">
		<div class="ejercicio">
				<!-- Enunciado --> 
				<h3>Escribe un programa que escriba los números del 1 al 100 en líneas de 10 números. Despúes del 100 el programa debe escribir "Fin de Programa" en una línea nueva</h3>
				<?php
					for($i = 1;$i <= 100;$i++){
						echo " $i ";
						if ($i % 10 == 0) {
							echo "<br>";
						}
					}
					echo "Fin de Programa";
				?>
				<br><br>
				<div class="solucion">
						<h3>Solución</h3>
						<script src="http://pastebin.com/embed_js.php?i=9L0zQauT"></script>
				</div>
				<br>
				<a href="#encabezado"><div class="volver">
					<h3>Volver arriba</h3>
				</div></a>
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>