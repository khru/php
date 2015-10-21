<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<!--link rel="stylesheet" href="css/estilo.css" type="text/css"-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<form action="<?= $_SERVER['PHP_SELF']?>" method="post" accept-charset="utf-8">
			<p>
				<label for="nombre">Nombre: </label>
				<input type="text" name="nombre" value="" placeholder="Introduce tú nombre..." required>
			</p>
			<p>
				<label for="email">E-mail: </label>
				<input type="email" name="email" value="" placeholder="Introduce tú email..." required>
			</p>
			<p>
				<label for="clave1">Contraseña: </label>
				<input type="password" name="clave[original]" value="" required>
			</p>
			<p>
				<label for="clave2">Repite tú contraseña: </label>
				<input type="password" name="clave[repetida]" value="" required>
			</p>
			<p>
				<input type="submit" value="Enviar">
			</p>
	</form>

</body>
</html>