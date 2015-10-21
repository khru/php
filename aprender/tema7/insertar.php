<?php
	include 'includes/plantilla.php';
	$titulo = "Inserción de contacto";

	escribe_cabecera($titulo);
	if(!$_POST){
		include 'includes/formulario.php';
	} else {
		$ssql = "insert into contactos(nombre, email, telf, direccion) values ('" . $_POST['nombre'] . "','" . $_POST['email'] . "','" . $_POST['telf'] . "','" . $_POST['direccion'] . "');" ;
		//echo $ssql;
		if (mysqli_query($conexion, $ssql)) {
			echo "Contacto insertado";

		} else {
			echo "El contacto no a sido insertado";
			echo "<br>" . mysqli_error($conexion);
		}
		escribe_pie($conexion);
	}
?>