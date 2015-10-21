<?php
	# Código
	session_start();
	if(!isset($_SESSION['user'])){
		$_SESSION['user'] = ['nombre' => 'Juan', 'password' => '1234'];
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prueba de session</title>
	<link rel="stylesheet" href="../estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Prueba de session</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<div class="ejercicio">
				<!-- Enunciado --> 
				<h3>Prueba de session</h3>
				<hr>
				<h1>Tu sesión es <?= session_id(); ?></h1>
				<pre><?= var_dump($_SESSION['user']); ?></pre>
				<a href="session2.php"> Enlace a página 2</a>
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