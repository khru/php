<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="box">
		<header id="header" class="cabecera">
			<h1>Formulario</h1>
		</header><!-- /header -->
		<div class="contenedor-formulario">
				<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" name="form">
					<p>(*) obligatorio</p>
					<!-- NOMBRE -->
					<p>
						<label for="nombre">Nombre (*):</label>
							<!-- OTRO PATRON SERÍA .{3,} CUALQUIER COSA 3 o más-->
						<input type="text" name="nombre" id="nombre" placeholder="Introduce el nombre" maxlength="30" pattern=".{3,}" required autofocus
						<?php mostrar_campo("nombre"); ?> >

						<?php 
							mostrar_errores_campo("nombre", $errores);
						?>
					</p>
					<p>
					<!-- 1º APELLIDO -->
						<label for="apellido1">Primer apellido (*):</label>
						<input type="text" name="apellido1" id="apellido1" placeholder="Primer apellido" maxlength="30" pattern=".{3,}" required autofocus
						<?php mostrar_campo("apellido1"); ?> >

						<?php 
							mostrar_errores_campo("apellido1", $errores);
						?>
					</p>
					<p>
					<!-- 2º APELLIDO -->
						<label for="apellido2">Segundo apellido:</label>
						<input type="text" name="apellido2" id="apellido2" placeholder="Segundo apellido" maxlength="30">
					</p>
					<p>
					<!-- DNI | NIE -->
						<label for="dni">DNI o NIE (*):</label>
						<input type="text" name="dni" id="dni" placeholder="DNI" maxlength="9" pattern=".{9}" required autofocus
						<?php mostrar_campo("dni"); ?> >

						<?php 
							mostrar_errores_campo("dni", $errores);
						?>
					</p>
					<p>
					<!-- DIRECCIÓN -->
						<label for="direccion">Dirección (*):</label>
						<input type="text" name="direccion" id="direccion" required autofocus placeholder="C/ mayor, 5-i, Nº 27"
						<?php mostrar_campo("direccion"); ?> >

						<?php 
							mostrar_errores_campo("direccion", $errores);
						?>
					</p>
					<p>
					<!-- POBLACIÓN  -->
						<label for="poblacion">Población (*):</label>
						<input type="text" name="poblacion" id="poblacion" placeholder="Torrevieja" required autofocus maxlength="20"
						<?php mostrar_campo("poblacion"); ?> >

						<?php 
							mostrar_errores_campo("poblacion", $errores);
						?>
					</p>
					<p>
					<!-- PROVINCIA -->
						<label for="provincia">Provincia (*):</label>
						<input type="text" name="provincia" id="provincia" placeholder="Alicante" required autofocus maxlength="20"
						<?php mostrar_campo("provincia"); ?> >

						<?php 
							mostrar_errores_campo("provincia", $errores);
						?>
					</p>
					<p>
					<!-- C.P -->
						<label for="codigo">C.P (*):</label>
						<input type="text" name="codigo" id="codigo" placeholder="03182" maxlength="5" required autofocus pattern="\d{5}"
						<?php mostrar_campo("codigo"); ?> >

						<?php 
							mostrar_errores_campo("codigo", $errores);
						?>
					</p>
					<p> 
					<!-- TELF -->
						<label for="telf">Teléfono (*):</label>
						<input type="tel" name="telf" id="telf" placeholder="902803803" maxlength="9" pattern="\d{9}" required autofocus
						<?php mostrar_campo("telf"); ?> >

						<?php 
							mostrar_errores_campo("telf", $errores);
						?>
					</p>
					<p>
					<!-- EMAIL -->
						<label for="email">E-mail (*):</label>
						<input type="email" name="email" id="email" required autofocus placeholder="example@gmail.com"
						<?php mostrar_campo("email"); ?> >

						<?php 
							mostrar_errores_campo("email", $errores);
						?>
					</p>
					<p>
					<!-- USUARIO -->
						<label for="user">Usuario (*):</label>
						<input type="text" name="user" id="user" required autofocus  pattern=".{4,}" placeholder="User01"
						<?php mostrar_campo("user"); ?> >

						<?php 
							mostrar_errores_campo("user", $errores);
						?>
					</p>
					<p>
					<!-- 1º CONTRASEÑA  -->
						<label for="clave1">Contraseña (*):</label>
						<input type="password" name="clave1"required autofocus maxlength="20" pattern=".{4,}" id="clave1" 
						<?php mostrar_campo("clave1"); ?> >

						<?php 
							mostrar_errores_campo("clave1", $errores);
						?>
					</p>
					<p>
					<!-- 2º CONTRASEÑA -->
						<label for="clave2">Repetir contraseña (*):</label>
						<input type="password" name="clave2" required autofocus  maxlength="20" pattern=".{4,}" id="clave2"
						<?php mostrar_campo("clave2"); ?> >

						<?php 
							mostrar_errores_campo("clave2", $errores);
						?>
					</p>
					<p>
						<input type="submit" name="from" value="Enviar">
						<input  type="reset" name="form" value="Borrar">
					</p>
				</form>
		</div>
		<footer>
			
		</footer>
	</div>
</body>
</html>