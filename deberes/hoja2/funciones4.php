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

	/**
	 * La fúnción recive 3 parametros en orden y los comprueba con la función checkdate
	 * Sí la comprobación es negativa devuelve false si es positiva devuelve true
	 * @param  [String]		$dia 		El día de la comprobación
	 * @param  [String]		$mes 		El mes de la comprobación
	 * @param  [String]		$anio 		El año de la comprobación
	 * @return [Boolean]	TRUE|FALSE 	TRUE = si la fecha es valida. FALSE = si la fecha no es valida
	 */
	function validacion_anio_bisiesto($anio){
			if(checkdate(2,29,$anio)){
			  return true;
			 }else{
			  return false;
		}
	}
?>