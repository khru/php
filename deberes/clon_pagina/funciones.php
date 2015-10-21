<?php
	
	// FUNCION de mostrar campo
	function mostrar_campo($campo){

		if(isset($_POST[$campo])){
			echo 'value="' . $_POST[$campo] . '"'; 
		}
	}//Funcion que muestra el contenido del campo una vez enviado

	//Funcion mostrar_errores_campo
	function mostrar_errores_campo($campo, $errores){
		//si existe la dentro del array de errores con clave = campo la mostraras
		if (isset($errores[$campo])) {
			echo '<span class="error">' . $errores[$campo] . '</span>';
		}
	}//fin de la función

	//funión de validar apellidos
?>