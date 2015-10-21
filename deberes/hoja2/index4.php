<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Hoja 2 - Ejercicio 4</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Hoja 2 - Ejercicio 4</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
	<div class="contenedor">
		<div class="ejercicio">
				<!-- Enunciado --> 
				<h3>Escribe un programa que diga si un año es bisiesto</h3>
				<hr>
					<?php
						//Incluir funciones
						include_once"funciones4.php";
						//Crear Array de errores
						//Array asociativo de errores comunes
						$errores = [];
						$tipos_error = ["vacio" => "El campo se encuentra vacio", "longitud" => "El campo no tiene una longitud adecauda", "formato" => "El campo no cumple con el formato"];
						if (!$_POST) {
							include 'formulario4.php';
						} else {
							// ===============================================================================================================
							// COMPROBACIÓN DE NUM1
							// ===============================================================================================================
							if (!isset($_POST["anio"]) || empty($_POST["anio"])) {
								$errores["anio"] = $tipos_error["vacio"];
							
							} elseif (!is_numeric($_POST["anio"])) {
								$errores["anio"] = $tipos_error["formato"];
							} elseif ($_POST["anio"] >= 0 && $_POST["anio"]<= PHP_INT_MAX) {
								$anio = $_POST["anio"];
							} else {
								$errores["anio"] =  $tipos_error["formato"];
							}

							if ($errores) {
								include "formulario4.php";
							} else {
								// ===============================================================================================================
								// COMPROBACIÓN DE OPERACIONEs
								// ===============================================================================================================
								if(isset($anio)){
									if (validacion_anio_bisiesto($anio) == false) {
										echo "El año no es bisiesto";
									} else{
										echo "El año es bisiesto";
									}
									
								}
								
							}
						} // fin del else
						//var_dump($errores);
					?>
					<hr>
				<!--div class="solucion">
						<h3>Solución</h3>

				</div>
				<br>
				<a href="#encabezado"><div class="volver">
					<h3>Volver arriba</h3>
				</div></a-->
		</div>
		<hr>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>