<?php
	function recuperar_campo($campo){
		if (isset($_POST[$campo])) {
			echo 'value="' . $_POST[$campo] . '"';
		}
	}
	function conexion(){
		$conexion = mysqli_connect("localhost", "root", "123", "agenda2")
		or die("Problema al conectar con la base de datos");
		return $conexion;
	}

	function cerrar_conexion($conexion){
		mysqli_close($conexion);
	}
	function mostrar_errores($array_errores){
		echo '<ul class="listaerrores">';
		foreach ($array_errores as $id => $error) {
			echo '<li>$error</li>';
		}
		echo '</ul>';
	}
?>