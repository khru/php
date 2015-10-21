<?php
	session_start();
	if (isset($_SESSION) && !empty($_SESSION)) {
		if ($_SESSION['clave1'] == $_SESSION['clave2']) {
			echo "<h1>Bienvenido " . $_SESSION['nombre'] . "</h1>";
			echo "<a href='logout.php'>Salir de sesión</a><br>";
		} else {
			echo "<h1>Las contraseñas no coinciden rellene el formulario otra vez</h1><br>";
			echo "<a href='index.php'>Rellenar formulario</a>";
		}
	} else {
		echo "<h1>Usted no tiene ninguna sesión abierta, porfavor inicie sesión</h1>";
		echo "<a href='index.php'>Iniciar sesión</a>";
	}
?>