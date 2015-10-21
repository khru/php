<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de $_POST</title>
	<link rel="stylesheet" href="estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Ejemplo de $_POST</h1>
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
				<!-- Enunciado --> 
				<h3>Ejemplo de $_POST</h3>
				<hr>
				<?php
					# Código
					if(!$_POST){
						#Mostramos el formulario en HTML
						include 'formulario.php';
					} else{
						echo $_POST["nombre"];
						echo "<br>" . $_POST["email"];
						if($_POST["clave"]["original"] == $_POST["clave"]["repetida"]){
							echo "las claves son correctas";
						} else {
							echo "Las claves son distintas";
						}
					}
				?>
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