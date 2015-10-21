<?php
	include 'includes/plantilla.php';
	$titulo = "Edición de un contacto";
	escribe_cabecera($titulo);
	if ($_POST) {
		$ssql = "update contactos set nombre='" . $_POST['nombre'] . "',";
	} else{
		$ssql = "SELECT * FROM constactos WHERE id_contacto = " . $_GET['id'];
		if ($rs = mysqli_query($conexion,$ssql)) {
		$fila = mysqli_fetch_array($rs);
		include "includes/formulario.php";
		}
	}
	
	escribe_pie($conexion);
?>