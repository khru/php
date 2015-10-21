<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<p>
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre"  placeholder="Introduce tú nombre" autofocus required
		<?php mostrar_campo("nombre"); ?> >
		<?php
			mostrar_errores_campo("nombre",$errores);
		?>
	</p>
	<p>
		<label for="email">E-mail</label>
		<input type="email" name="email" id="email"  placeholder="example@dominio.com" required autofocus
		<?php mostrar_campo("email"); ?> >
		<?php 
			mostrar_errores_campo("email", $errores);
		?>
	</p>
	<p>
		<label for="clave1">Contraseña:</label>
		<input type="password" name="clave1" id="clave1" value="" placeholder="" required autofocus>
		<?php 
			mostrar_errores_campo("clave1", $errores);
		?>
	</p>
	<p>
		<label for="clave2">Repetir contraseña:</label>
		<input type="password" name="clave2" id="clave2" value="" placeholder="" required autofocus>
	</p>
	<p>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="borrar" value="Borrar">
	</p>
</form>
</body>
</html>