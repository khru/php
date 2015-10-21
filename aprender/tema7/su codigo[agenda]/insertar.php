<?php
include("includes/plantilla.php");
$titulo="Insercion de contacto";
escribe_cabecera($titulo);


if(!$_POST){
	include "includes/formulario.php";
}else{
	//realizo la insercion

	///COmprobaciones necesarias

	$ssql="insert into contactos(nombre, email, tlf, direccion) values ('".$_POST['nombre']."','".$_POST['email']."',".$_POST['tlf'].",'".$_POST['direccion']."')";
	if(mysqli_query($conexion,$ssql)){
		echo "Contacto insertado";
	}else{
		echo "No inserte nada";
		echo "<br />". mysqli_error($conexion);
		include ("includes/formulario.php");
	}
}

escribe_pie($conexion);