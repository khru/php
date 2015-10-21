<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
<?php
	//Decalración de errore[] asociativos
	$errores = [];

	$tipo_errores = ["vacio" => "El campo esta vacio", "longitud" => "El campo es demasiado corto", "formato" => "El campo no cumple el formato", "letra" => "Letra incorrecta", "contraseñas" => "No se ha recivido las 2 contraseñas", "distintas" => "Las contraseñas son distintas"];

	// REGEX o Expresiones regulares preg_match($regex, $texto)
	$dniRegex = '/^[XYZ]?([0-9]{7,8})([A-Z])$/i';
	//$telfRegex = '/^[9|6|7][0-9]{8}$/';
	$emailRegex = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
	//$calleRegex = '[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?)* (((#|[nN][oO]\.?) ?)?\d{1,4}(( ?[a-zA-Z0-9\-]+)+)?)';
	//Incluimos nuestras funciones
	include 'funciones.php';
	if (!$_POST) {
		//sino existe $_POST, lanzar formulario
		include 'formulario.php';
	} else {

		// ==================================================================================================
		// Validación de Nombre
		// ==================================================================================================
		//compruebo empty porque no es lo mismo tener una cadena con longitud 2 que una vacia.
		if(!isset($_POST["nombre"]) || empty($_POST["nombre"])){

			// Si el nombre no existe o esta vacio
			$errores["nombre"] = $tipo_errores["vacio"];

		} elseif (strlen($_POST["nombre"]) < 3) {

			// Si el nombre es inferior a 3 letras error
			$errores["nombre"] = $tipo_errores["longitud"];
		} 
		
		// ==================================================================================================
		// Validación de Apellido1
		// ==================================================================================================
		
		if(!isset($_POST["apellido1"]) || empty($_POST["apellido1"])){

			//Si el campo no existe o esta vacio
			$errores["apellido1"] = $tipo_errores["vacio"];

		} elseif (strlen($_POST["apellido1"]) < 3) {

			$errores["apellido1"] = $tipo_errores["longitud"];
		}

		// ==================================================================================================
		// Validación de DNI
		// ==================================================================================================

		// Si ya se ha rellenado el formulario (Existe $_POST) comprobamos el contenido de las variables
		if (!isset($_POST["dni"]) || empty($_POST['dni'])) {

			//Si el campo esta vacio o no está declarado
			$errores["dni"] = $tipo_errores["vacio"];

		} else if(strlen($_POST['dni']) < 9){

			//El DNI tiene una longitud inferior a 9
			$errores["dni"] = $tipo_errores["longitud"];

		} elseif (!preg_match($dniRegex, $_POST["dni"])) {

			// Si no cumple con el formato del NIE o del NIF error
			$errores["dni"] = $tipo_errores["formato"];

		} else {
			
			$_POST['dni'] = strtoupper($_POST['dni']);
			//$letra = substr($_POST['dni'], -1, 1); donde empieza el substring y cuanto a de coger
			$letra = substr($_POST['dni'], -1, 1);
			//numero de digitos que tendrá el DNI o NIE
			$numero = substr($_POST['dni'], 0, 8);
			 
			// Si es un NIE hay que cambiar la primera letra por 0, 1 ó 2 dependiendo de si es X, Y o Z.
			$numero = str_replace(array('X', 'Y', 'Z'), array(0, 1, 2), $numero);

		 	//calculo de la letra mediante la formula del modulo 23
			$modulo = $numero % 23;
			$letras_validas = "TRWAGMYFPDXBNJZSQVHLCKE";
			$letra_correcta = substr($letras_validas, $modulo, 1);

		 	//Si la letra no es correcta da un error
			if($letra_correcta != $letra) {
				$errores["dni"] = $tipo_errores["letra"];
			}
		}

		// ==================================================================================================
		// Validación de la direccion
		// ==================================================================================================
		if (!isset($_POST["direccion"]) || empty($_POST["direccion"])) {
			// Si el campo no existe o está vacio, se notifica
			$errores["direccion"] =  $tipo_errores["vacio"];
		} elseif (strlen($_POST["direccion"]) <= 5) {
			$errores["direccion"] =  $tipo_errores["longitud"];;
		}

		// ==================================================================================================
		// Validación de la Población
		// ==================================================================================================
		 if (!isset($_POST["poblacion"]) || empty($_POST["poblacion"])) {

			// Si el campo no existe o está vacio, se notifica
			$errores["poblacion"] =  $tipo_errores["vacio"];

		} elseif (strlen($_POST["poblacion"]) < 4) {

			$errores["poblacion"] =  $tipo_errores["longitud"];;
		}
		
		// ==================================================================================================
		// Validación de la Provincia
		// ==================================================================================================
		if (!isset($_POST["provincia"]) || empty($_POST["provincia"])) {

			// Si el campo no existe o está vacio, se notifica
			$errores["provincia"] =  $tipo_errores["vacio"];
		} elseif (strlen($_POST["provincia"]) <= 5) {

			$errores["provincia"] =  $tipo_errores["longitud"];;
		}
		 
		// ==================================================================================================
		// Validación de el C.P
		// ==================================================================================================
		if (!isset($_POST["codigo"]) || empty($_POST["codigo"])) {

			// Si el cp no es introducido o se introduce vacio
			$errores["codigo"] = $tipo_errores["vacio"];

		} elseif ($_POST["codigo"] < "01001" || $_POST["codigo"] >= "52999" && strlen($_POST["codigo"]) != "5") {

			$errores["codigo"] =  $tipo_errores["longitud"];
		}
		// ==================================================================================================
		// Validación del Telf
		// ==================================================================================================
		if (!isset($_POST["telf"]) || empty($_POST["telf"])) {

			//Si no existe el teléfono o estéa vacio
			$errores["telf"] = $tipo_errores["vacio"];

		} elseif (strlen( $_POST["telf"]) < 9) {

			// El telefono no tiene la longitud necesaria
			$errores["telf"] = $tipo_errores["longitud"];

		}

		// ==================================================================================================
		// Validación de la E-mail
		// ==================================================================================================
		if (!isset($_POST["email"]) || empty($_POST["email"])) {

			// Si el email no existe o está vacio
			$errores["email"] =  $tipo_errores["vacio"];

		} elseif (strlen($_POST["email"]) < 6) {

			// El email no tiene la suficiente longitud
			$errores["email"] = $tipo_errores["longitud"];

		} elseif(!preg_match($emailRegex, $_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

			// Si no pasa el REGEX y el filtro
			$errores["email"] = $tipo_errores["formato"];
		}
		
		// ==================================================================================================
		// Validación de la usuario
		// ==================================================================================================
		if (!isset($_POST["user"]) || empty($_POST["user"])) {
			//Si no existe el usuario o estéa vacio
			
			$errores["user"] = $tipo_errores["vacio"];

		} elseif (strlen( $_POST["user"]) < 9) {

			// El usuario no tiene la longitud necesaria
			$errores["user"] = $tipo_errores["longitud"];

		}
		// ==================================================================================================
		// Validación de la contraseñas
		// ==================================================================================================
		if (!isset($_POST['clave1']) || !isset($_POST['clave2'])) {
							
			$errores["clave1"] = $tipo_errores["vacio"];
							
		} else {

			if (strlen($_POST['clave1']) < 5) {
				
				$errores["clave1"] = $tipo_errores["contraseñas"];
				
			}

			if ($_POST['clave1'] != $_POST['clave2']) {
				
				$errores["clave2"] = $tipo_errores["distintas"];
				
			} 
		}


		//COMPRUEBO SI EXISTEN ERRORES
		if ($errores) {
			include ("formulario.php");

		} else {
			echo "<h1>El usuario ha sido registrado</h1>";
		}
	}//fin del else

	//DEBUGGER
	//var_dump($errores);

?>
</body>
</html>