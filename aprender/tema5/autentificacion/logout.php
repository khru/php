<?php 
	session_start();
	session_destroy();
	echo "<h1>Sesión cerrada</h1>";
	echo "<a href='bienvenida.php'>Entre acceda a su sesion</a>"
?>