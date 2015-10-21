<?php
	//=====================================================================================================
	//'FUNCIONES DE MOSTRAR RESULTADO'
	//=====================================================================================================
	// FUNCION de mostrar campo
	function mostrar_campo($campo){

		if(isset($_POST[$campo])){
			echo 'value="' . $_POST[$campo] . '"'; 
		}
	}
	//Funcion mostrar_errores_campo
	function mostrar_errores_campo($campo, $errores){
		//si existe la dentro del array de errores con clave = campo la mostraras
		if (isset($errores[$campo])) {
			echo '<span class="error">' . $errores[$campo] . '</span>';
		}
	}
	//=====================================================================================================
	//'FUNCIONES DE PROCESAMIENTO'
	//=====================================================================================================
	/**
	 * @author Emmanuel Valverde Ramos <evrtrabajo@gmail.com>
	 * [Valida El día que se le pasa por parametro y devuelve true o false]
	 * @param  [integer | String] $fecha [Se puede obtener de un tratamiento de una fecha completa o simplemente obteniendolo directamente]
	 * @return [boolean]   true|false     [Devuelve un boleano con el cual podremos hacer comprobaciones]
	 */
	function dia_valido ($fecha){
		// Array de días
		$dias = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
		// Recorremos los días
		foreach ($dias as $dia) {
			//Si encuentra una igualdad entrá y devuelve true
			if ($dia == $fecha) {
				return true;
			}
		}
		// Sino encuentra una igualda devuelve false
		return false;
	}// validación de dia

	/**
	 * @author Emmanuel Valverde Ramos <evrtrabajo@gmail.com>
	 * La función mes_valido comprueba si el mes introducido es valido o no
	 * @param  [Integer | String] $fecha [Este parametro es el més ya haya sido obtenido mediante tratamiento o directamente]
	 * @return [Boolean]   true|false     [Devuelve true si el més es valido false sino lo es]
	 */
	function mes_valido($fecha){
		// Array de meses validos
		$meses = [1,2,3,4,5,6,7,8,9,10,11,12];
		// Recore el array de meses
		foreach ($meses as $mes) {
			// Si encuentra una igualdad entre el mes introducido y un valor del array devuelve true
			if ($mes == $fecha) {
				return true;
			}
		}
		// Sino encuentra una igualda devuelve una false
		return false;
	} // fin de mes_valido

	/**
	 * @author Emmanuel Valverde Ramos <evrtrabajo@gmail.com>
	 * La función devuelve un boleano si la fecha es valida o no hasta la fecha actual
	 * @param  [Integer | String] $fecha [El año a comprobar]
	 * @return [boolean]   true|false     [El ]
	 */
	function anio_valido_actual($fecha){
		// Ponemos la fecha de Madrid
		date_default_timezone_set("Europe/Madrid");
		// Comprobamos el año está entre 0 y el año actual
		if ($fecha > 0 && $fecha <= date("Y")) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @author Emmanuel Valverde Ramos <evrtrabajo@gmail.com>
	 * [La función anio_valido, comprueba que el año es valido desde 0 hasta la mayor cifra de un entero]
	 * @param  [Integer | String] 	$fecha      		[El año a comprobar]
	 * @return [Boolean]  			true|false 			[True si la comprobación es verdadera y false sino lo es]
	 */
	function anio_valido($fecha){
		if ($fecha > 0 && $fecha <= PHP_INT_MAX) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * @author Emmanuel Valverde Ramos <evrtrabajo@gmail.com>
	 * La fúnción recive 3 parametros en orden y los comprueba con la función checkdate
	 * Sí la comprobación es negativa devuelve false si es positiva devuelve true
	 * @param  [String]		$dia 		El día de la comprobación
	 * @param  [String]		$mes 		El mes de la comprobación
	 * @param  [String]		$anio 		El año de la comprobación
	 * @return [Boolean]	TRUE|FALSE 	TRUE = si la fecha es valida. FALSE = si la fecha no es valida
	 */
	function validacion_fecha($dia, $mes, $anio){
		return checkdate($mes, $dia, $anio);
	}

?>