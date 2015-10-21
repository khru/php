<?php
	/**
	 * Esta función recive un campo del formulario, se comprueba si existe en $_POST, de ser así se muestra en el campo value
	 * @param  [String] $campo Campo del formulario
	 */
	function mostrar_campo($campo){
		if(isset($_POST[$campo])){
			echo 'value="' . $_POST[$campo] . '"'; 
		}
	}

	/**
	 * [mostrar_errores_campo description recive 2 parametros un array de errores y un campo por el cual acceder al array asociativo]
	 * @param  [String] $campo   [Campo del formulario para mostrar el error]
	 * @param  [Array] $errores [Array de errores]
	 */
	function mostrar_errores_campo($campo, $errores){
		if (isset($errores[$campo])) {
			echo '<span class="error">' . $errores[$campo] . '</span>';
		}
	}
?>