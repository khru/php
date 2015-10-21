<?php
	session_start();
	if(!$_POST){
		//Evitar entrar directamente conociendo la ruta
		echo "<h1>El formulario está vacio, Rellene el formulario de nuevo</h1>";
		echo "<a href='index.php'>Rellenar formulario</a>";
	} else {
		//Comprobación de si los campos están vacios o no
		if (!isset($_POST["nombre"]) || empty($_POST["nombre"])) {
			echo "<h1>El nombre está vacio, Rellene el formulario de nuevo</h1>";
			echo "<a href='index.php'>Rellenar formulario</a>";
		}elseif (!isset($_POST["apellidos"]) || empty($_POST["apellidos"])) {
			echo "<h1>Los apellidos está vacio, Rellene el formulario de nuevo</h1>";
			echo "<a href='index.php'>Rellenar formulario</a>";
		}elseif (!isset($_POST["email"]) || empty($_POST["email"])) {
			echo "<h1>El E-mail está vacio, Rellene el formulario de nuevo</h1>";
			echo "<a href='index.php'>Rellenar formulario</a>";
		}elseif (!isset($_POST["clave1"]) || empty($_POST["clave1"])) {
			echo "<h1>La contraseña está vacio, Rellene el formulario de nuevo</h1>";
			echo "<a href='index.php'>Rellenar formulario</a>";
		}elseif (!isset($_POST["clave2"]) || empty($_POST["clave2"])) {
			echo "<h1>La repetición de la contraseña está vacio, Rellene el formulario de nuevo</h1>";
			echo "<a href='index.php'>Rellenar formulario</a>";
		}else {
			//Expresión regular que contorla el E-mail
			$regex = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';
			//Comprobamos que el E-ail pase la expresión regular
			if (!preg_match($regex,$_POST['email'])) {
				echo "<h1>El E-mail no es valido, rellena el formulario de nuevo</h1><br>";
				echo "<a href='index.php'>Rellenar formulario</a>";
			} else {
				//Si la sessión no ha sido creada se crea
				if (isset($_SESSION['user']) || empty($_SESSION)) {			
					foreach ($_POST as $indice => $contenido) {
						$_SESSION[$indice] = $contenido;
					}
				}
				//se acepta el formulario y redirecciona a la vienvenida
				echo "<h1>Formaulario relleno</h1> <br>";
				echo "Su formulario a sido rellenado correctamente<br>";
				echo "<a href='bienvenida.php'>Entre acceda a su sesion</a>";
			}
		}
	}
	
?>