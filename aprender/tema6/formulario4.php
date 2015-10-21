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
						include ("formulario4.html");
					//sino te comprueba los campos del formulario
					} else {
						//Procesamos el formulario
						//declaramos el array de errorres
						$errores = [];


						if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {

							$errores[] =  "No se ha recivido el nombre";

						} elseif (strlen($_POST['nombre']) < 3) {
							
							$errores[] = "Nombre demasiado corto";
							
						} 
						
						//ERRORES de E-MAIL
						if (!isset($_POST['email']) || empty($_POST['email'])){
							
							$errores[] = "No se ha recivido un E-mail";
							
						} elseif (strlen($_POST['email']) < 6) {
							
							$errores[] = "El E-mail no es valido";
							
						}

						//ERRORES de CLAVE
						if (!isset($_POST['clave1']) || !isset($_POST['clave2'])) {
							
							$errores[] = "No se ha recivido las 2 contraseñas";
							
						} else {

							if (strlen($_POST['clave1']) < 5) {
								
								$errores[] = "La contraseña no tiene la longitud necesaria";
								
							}

							if ($_POST['clave1'] != $_POST['clave2']) {
								
								$errores[] = "Las contraseñas son distintas";
								
							} 
						}

						//COMPRUEBO SI EXISTEN ERRORES
						if ($errores) {
							//LLAMO A LA FUNCION DE LLAMADA DE ERRORES
							//PROPORCION UN LINK AL FORMULARIO
							mostrar_errores($errores);
							// -- CAMBIO DEL FORMULARIO 3
							include ("formulario4.html");

						} else {
							echo "<h1>El usuario ha sido registrado</h1>";
						}
					}// fin del primer ELSE
					
					//FUNCION mostrar_errores
					function mostrar_errores($errores){
						echo '<ul class="listaerrores">';
							foreach ($errores as $error) {
								# recorremos la el array de errores
								echo "<li>$error</li>";
							}
						echo '</ul>';
					}

				?>
				<hr>
			</div>
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>