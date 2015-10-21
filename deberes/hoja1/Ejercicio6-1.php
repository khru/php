<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio - 1</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Ejercicio 6 - hoja 1</h1>
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
				<h3>Escribe un programa que calcule el número de billetes de 500, 200, 100, 50, 20, 10, 5 así como de monedas de 2, 1, 0.5, 0.20, 0.10, 0.05, 0.02 y 0.01 para desglosar una cantidad C de forma que se necesite la menor cantidad de billetes de cada tipo.</h3>
				<hr>
					<?php
						//Para contar billetes tendremos un array con las cantidades de billetes
						//Y un array con los restos 
						$billetes = [500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.10, 0.5, 0.02, 0.01];
						
						//Dinero
						$dinero = 55.23;
						$aux = $dinero;
						echo "La cantidad que intenta obtener en billetes es: ". $dinero . "<br>";
						//Comprobación de número de unidades
						$entero = (int) $dinero;
						echo "La parte entera del dinero introducido es de " . strlen($entero) . " digitos<br>";
						if (strlen($entero) >= 3) {
							foreach ($billetes as $indice => $billete) {
								$nBilletes = (int) ($dinero / $billete);
								echo "Para llegar a $aux necesitas: $nBilletes de {$billete}€<br>";
								# el modulo redondea a entero
								$resto =  ($dinero - ($billete * $nBilletes));
								if($resto == 0){
									break;
								}
								$dinero = $resto;
							}
						} elseif (strlen($entero) == 2) {
							for ($i=3; $i <= 14 ; $i++) { 
								# code...
								$nBilletes = (int) ( $dinero / $billetes[$i]);	
								$resto = ($dinero - ($billetes[$i] * $nBilletes));
								echo "Para llegar a $aux necesitas: $nBilletes de {$billetes[$i]}€<br>";
								if($resto == 0){
									break;
								}
								$dinero = $resto;
							}
						} else {
							for ($i=6; $i <= 14 ; $i++) { 
								# code...
								$nBilletes = (int) ( $dinero / $billetes[$i]);
								echo "Para llegar a $aux necesitas: $nBilletes de {$billetes[$i]}€<br>";
								$resto = ($dinero - ($billetes[$i] * $nBilletes));
								if($resto == 0){
									break;
								}
								$dinero = $resto;
							}
						}
					?>
				<hr>
				<div class="solucion">
						<h3>Solución</h3>
						<script src="http://pastebin.com/embed_js.php?i=NJBWgBhW"></script>
				</div>
				<br>
				<div class="volver">
					<h3> <a href="#encabezado">Volver arriba</a></h3>
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
