<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Hoja 2 - Ejercicio 2</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Hoja 2 - Ejercicio 2</h1>
		</div>
		</nav-->
		<!-- CONTENIDO DE LA PÁGINA -->
	<div class="contenedor">
		<div class="ejercicio">
				<!-- Enunciado --> 
				<h3>Sea un sistema de ecuaciones formada:<br>ax * by = c<br>dx + ey = f<br>que puede resolver usando las siguientes fórmulas<br> x = (ce-bf) / (ae-bd) --- y = (af-cd) / (ae-bd)<br> Escribe un programa que dados los coeficientes resuelva el sistema. El programa deberá indicar los casos en los que el sistema de ecuaciones no tenga solución</h3>
				<hr>
					<?php
						//Incluir funciones
						include_once"funciones2.php";
						//Crear Array de errores
						//Array asociativo de errores comunes
						$errores = [];
						$tipos_error = ["vacio" => "El campo se encuentra vacio", "longitud" => "El campo no tiene una longitud adecauda", "formato" => "El campo no cumple con el formato"];
						if (!$_POST) {
							include 'formulario2.php';
						} else {
							// ===============================================================================================================
							// COMPROBACIÓN DE NUM1
							// ===============================================================================================================
							if (!isset($_POST["num1"])) {
								$errores["num1"] = $tipos_error["vacio"];
							
							} elseif (!is_numeric($_POST["num1"])) {
								$errores["num1"] = $tipos_error["formato"];
							} else{
								$a = $_POST["num1"];
							}
							// ===============================================================================================================
							// COMPROBACIÓN DE NUM2
							// ===============================================================================================================
							if(!isset($_POST["num2"]) || empty($_POST["num2"])) {
								$errores["num2"] = $tipos_error["vacio"];
							} elseif (!is_numeric($_POST["num2"])) {
								$errores["num2"] = $tipos_error["formato"];
							} else {
								$b = $_POST["num2"];
							}

							// ===============================================================================================================
							// COMPROBACIÓN DE NUM3
							// ===============================================================================================================
							if(!isset($_POST["num3"]) || empty($_POST["num3"])) {
								$errores["num3"] = $tipos_error["vacio"];
							} elseif (!is_numeric($_POST["num3"])) {
								$errores["num3"] = $tipos_error["formato"];
							} else {
								$c = $_POST["num3"];
							}

							

							if ($errores) {
								include "formulario2.php";
							} else {
								// ===============================================================================================================
								// COMPROBACIÓN DE OPERACIONEs
								// ===============================================================================================================
								if(isset($a) && isset($b) && isset($c)){
									ecuacion($a, $b, $c);
								}
								
							}
						} // fin del else
						//var_dump($errores);
					?>
					<hr>
					
				<div class="solucion">
						<h3>Solución</h3>
						<h3>Index</h3>
						<script src="http://pastebin.com/embed_js.php?i=7JbYQqw5"></script>
						<h3>Funciones</h3>
						<script src="http://pastebin.com/embed_js.php?i=a8Xcm3LK"></script>
						<h3>Formulario</h3>
						<script src="http://pastebin.com/embed_js.php?i=iZP1mXtd"></script>
				</div>
				<br>
				<a href="#encabezado"><div class="volver">
					<h3>Volver arriba</h3>
				</div></a><br>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>