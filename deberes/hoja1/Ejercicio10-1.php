<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 10 - hoja 1</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<link rel="stylesheet" href="css/formulario.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Ejercicio 10 - hoja 1</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
	<div class="contenedor">
		<div class="ejercicio">
				<!-- Enunciado --> 
				<h3>Calcular la edad de una persona introduciendo la fecha actual y su fecha de nacimiento</h3>
					<?php
						include "funciones.php";
						$errores = [];
						if(!$_POST){
							include 'formulario10.php';
						} else {
							// 	COMPROBACIÓN DE LA FECHA ACTUAL
							if (!isset($_POST["actual"]) || empty($_POST["actual"])) {
								
							}
							// COMPROBACIÓN DEL DÍA
							if (!isset($_POST["dia"]) || empty($_POST["dia"])) {
								$errores["dia"] = "El día esta vacio";
							} elseif (!dia_valido($_POST["dia"])) {
								$errores["dia"] = "El día introducido no existe";
							} else {
								$dia = $_POST["dia"];
							}
							//COMPROBACIÓN DE EL MES
							if (!isset($_POST["mes"]) || empty($_POST["mes"])) {
								$errores["mes"] = "El mes esta vacio";
							} elseif (!mes_valido($_POST["mes"])) {
								$errores["mes"] = "El mes introducido no existe";
							} else {
								$mes = $_POST["mes"];
							}
							// COMPROBACIÓN DEL AÑO
							if (!isset($_POST["anio"]) || empty($_POST["anio"])) {
								$errores["anio"] = "El año está vacio";
							} elseif (!anio_valido($_POST["anio"])) {
								$errores["anio"] = "El año no es valido";
							} else {
								$anio = $_POST["anio"];
							}
							// 	VALIDACIÓN DE LA FECHA
							if(isset($dia) && isset($mes) && isset($anio)){
								$validacion = validacion_fecha($dia, $mes, $anio);
								if ($validacion) {
									if ($_POST["actual"] < $anio) {
										$edad = "El año actual no puede ser inferior al año de nacimiento";
									} else {
										$edad = ($_POST["actual"] - $anio);
									}
								} else {
									$errores["valida"] = "La fecha no es valida";
								}
							} else {
								$errores["valida"] = "La fecha no es valida";
							}

							// GESTIÓN DE ERRORES
							if ($errores) {
								include 'formulario10.php';
							} else {
									echo "<h1>Su edad es: {$edad} años</h1>";
							}
						}

					?>
				<!--div class="solucion">
						<h3>Solución</h3>

				</div>
				<br>
				<a href="#encabezado"><div class="volver">
					<h3>Volver arriba</h3>
				</div></a-->
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>