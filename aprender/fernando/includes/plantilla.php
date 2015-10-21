<?php 

include "conexion.php";

$conexion = abrir_conexion("192.168.56.101","root","123","agenda");


//pasamos como parámetro el título que llevará esa página.
//Cuando en el index llamemos a la función cabecera sin nada más, escribirá este título.
function escribe_cabecera($titulo ="Agenda de contactos"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda de Contactos</title>
	<link rel="stylesheet" href="indlude/estilos.css">
</head>
<body>
	
	<header class="cabecera">
		<h1><?= $titulo?></h1>
	</header>
	<section>
		
	<?php
	}

//se le pasa la conexión como parámetro, para poder cerrarla
function escribe_pie($conexion){
	?>
	</section>
	<footer class="pie">
		
		<a href="index.php">Página Principal</a>
		<a href="insertar.php">Insertar un contacto</a>
	</footer>



</body>
</html>
<<?php  
	cerrar_conexion($conexion);


}