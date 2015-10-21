<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formularios usables</title>
	<link rel="stylesheet" href="estilos.css" type="text/css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Formularios usables</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
		<div class="contenedor">
			<div class="ejercicio">
				<hr>
				<?php
					# Código
					//Si se accede directamente al script te remite al formulario
					if(!$_POST){
						include ("formulario.html");
					//sino te comprueba los campos del formulario
					} else {
						if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
							echo "<h1>NO se ha recivido el nombre</h1>";
							echo "<a href='formulario.php'>Vuelve a rellenar el formulario</a>";
						} elseif (strlen($_POST['nombre']) < 3) {
							echo "<h1>Nombre demasiado corto</h1>";
							echo "<a href='formulario.php'>Vuelve a rellenar el formulario</a>";
						} elseif (!isset($_POST['email']) || empty($_POST['email'])){
							echo "<h1>No se ha recivido un E-mail</h1>";
							echo "<a href='formulario.php'>Vuelve a rellenar el formulario</a>";
						} elseif (strlen($_POST['email']) < 6) {
							echo "<h1>El E-mail no es valido</h1>";
							echo "<a href='formulario.php'>Vuelve a rellenar el formulario</a>";
						} elseif (!isset($_POST['clave1']) || !isset($_POST['clave2'])) {
							echo "<h1>No se ha recivido las 2 contraseñas</h1>";
							echo "<a href='formulario.php'>Vuelve a rellenar el formulario</a>";
						} elseif (strlen($_POST['clave1']) < 5) {
							echo "<h1>La contraseña no tiene la longitud necesaria</h1>";
							echo "<a href='formulario.php'>Vuelve a rellenar el formulario</a>";
						} elseif ($_POST['clave1'] != $_POST['clave2']) {
							echo "<h1>Las contraseñas son distintas</h1>";
							echo "<a href='formulario.php'>Vuelve a rellenar el formulario</a>";
						} else {
							echo "<h1>El usuario ha sido registrado</h1>";
						}
					}
				?>
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