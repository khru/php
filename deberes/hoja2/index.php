<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Hoja 2</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Hoja 2</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
	<div class="contenedor">
		<div class="ejercicio" id="ejercicio1">
				<!-- Enunciado --> 
				<h3>Escribe un programa que dados 3 números, si el primero es negativo, calcule el producto de los 3, en caso contrario, calcula la suma</h3>
					<hr>
					<?php
						//Incluir funciones
						include "funciones1.php";
						//Crear Array de errores
						//Array asociativo de errores comunes
						$errores = [];
						$tipos_error = ["vacio" => "El campo se encuentra vacio", "longitud" => "El campo no tiene una longitud adecauda", "formato" => "El campo no cumple con el formato"];
						if (!$_POST) {
							include 'formulario1.php';
						} else {
							// ===============================================================================================================
							// COMPROBACIÓN DE NUM1
							// ===============================================================================================================
							if (!isset($_POST["num1"]) || empty($_POST["num1"])) {
								$errores["num1"] = $tipos_error["vacio"];
							
							} elseif (!is_numeric($_POST["num1"])) {
								$errores["num1"] = $tipos_error["formato"];
							} elseif ($_POST["num1"] >= 0 && $_POST["num1"] < PHP_INT_MAX) {
								//SUMAMOS
								$sumar = $_POST["num1"];
							} elseif($_POST["num1"] < 0)  {
								// Calculamos el producto
								$producto = $_POST["num1"];
							}
							// ===============================================================================================================
							// COMPROBACIÓN DE NUM2
							// ===============================================================================================================
							if(!isset($_POST["num2"]) || empty($_POST["num2"])) {
								$errores["num2"] = $tipos_error["vacio"];
							} elseif (!is_numeric($_POST["num2"])) {
								$errores["num2"] = $tipos_error["formato"];
							} else {
								$num2 = $_POST["num2"];
							}

							// ===============================================================================================================
							// COMPROBACIÓN DE NUM3
							// ===============================================================================================================
							if(!isset($_POST["num3"]) || empty($_POST["num3"])) {
								$errores["num3"] = $tipos_error["vacio"];
							} elseif (!is_numeric($_POST["num3"])) {
								$errores["num3"] = $tipos_error["formato"];
							} else {
								$num3 = $_POST["num3"];
							}

							

							if ($errores) {
								include "formulario1.php";
							} else {
								// ===============================================================================================================
								// COMPROBACIÓN DE OPERACIONEs
								// ===============================================================================================================
								if (isset($sumar) && isset($num2) && isset($num3)) {
									$suma = $sumar + $num2 + $num3;
									echo "La suma de $sumar + $num2 + $num3 = $suma <br>";
								} elseif (isset($producto) && isset($num2) && isset($num3)) {
									$pro = $producto * $num2 * $num3;
									echo "El producto de $producto * $num2 * $num3 = $pro";
								}
							}
						} // fin del else
						//var_dump($errores);
					?>
					<hr>
				<div class="solucion">
						<h3>Solución</h3>
						<h3>FORMULARIO</h3>
						<script src="http://pastebin.com/embed_js.php?i=scGCF6My"></script>
						<h3>INDEX</h3>
						<script src="http://pastebin.com/embed_js.php?i=1Ewy1ytg"></script>
						<h3>FUNCIONES</h3>
						<script src="http://pastebin.com/embed_js.php?i=RkQLdMGT"></script>
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