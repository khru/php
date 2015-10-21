<?php
	// incluyo el script de conexión a la base de datos para usar su función
	// De forma que el script que utilice plantilla, tendrá por defecto la conexión
	include "conexion.php";
	$conexion = abrir_conxion("localhost", "root", "123", "agenda");

	//Escribir cabecera
	function escribe_cabecera($titulo = "Agenda de Contactos"){
		?>
			<!DOCTYPE html>
			<html lang="es">
			<head>
				<meta charset="UTF-8">
				<title>Agenda de Contactos</title>
				<link rel="stylesheet" href="include/estilo.css" type="text/css">
			</head>
			<body>
				<header class="cabecera"><h1><?= $titulo?></h1></header>
				<section>
		<?php
		
	}

	//Escribir el pie de página
	function escribe_pie($conexion){
		?>
				</section>
				<footer>
					<a href="index.php">Página principal</a>
					<a href="insertar.php">Insertar un contacto</a>
				</footer>
			</body>
		</html>
		<?php
		cerrar_conexion($conexion);
	}
?>