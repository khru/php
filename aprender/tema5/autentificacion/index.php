<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulacio de autentificación</title>
	<link rel="stylesheet" href="../../estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
	<!-- Contenedor de todos los elementos -->
	<div class="box">
		<!-- ENCABEZADO DE LA PÁGINA -->
		<div class="encabezado" align="center" id="encabezado">
			<h1>Formulacio de autentificación</h1>
		</div>
		<!-- CONTENIDO DE LA PÁGINA -->
	<div class="contenedor">
		<div class="ejercicio" id="ejercicio1">
			<!-- Enunciado --> 
			<h3>Formulacio de autentificación</h3>
			<!-- FORMULARIO RESTRICTIVO -->
			<form action="session.php" method="post">
				<fieldset>
					<legend>Formulario de alta</legend>
				
					<p>
						<label for="nombre">Introduce tú nombre: </label>
						<input type="text" for="nombre" name="nombre" id="nombre" placeholder="Introduce tú nombre..." required autofocus>
					</p>
					<p>
						<label for="apellidos">Introduce tus apellido: </label>
						<input type="texto" name="apellidos" id="apellidos" placeholder="Introduce tus apellidos..." required autofocus>
					</p>
					<p>
						<label for="email">Introduce tú E-mail: </label>
						<input type="email" name="email" id="email" placeholder="example@domain.com" required autofocus>
					</p>
					<p>
						<label for="clave1">Introduce una contraseña: </label>
						<input type="password" name="clave1" id="clave1" required autofocus>
					</p>
					<p>
						<label for="clave2">Repite una contraseña: </label>
						<input type="password" name="clave2" id="clave2" required autofocus>
					</p>
					<p>
						<input type="submit" name="Enviar" value="Enviar">
						<input type="reset" name="Borrar" value="Borrar">
					</p>
				</fieldset>
			</form>
		</div>
		<!-- PIE DE PÁGINA -->
		<footer align="center">
			<p>Emmanuel Valverde Ramos</p>
		</footer>
	</div>
</body>
</html>