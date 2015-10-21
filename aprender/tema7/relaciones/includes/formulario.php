<form action="<?=  $_SERVER['PHP_SELF']; ?>" method="post" accept-charset="utf-8">
	<p>
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" placeholder="Introduce el nombre" <?php recuperar_campo("nombre"); ?> >
	</p>
	<p>
		<label for="email">E-mail:</label>
		<input type="email" name="email" placeholder="Introduce el nombre" <?php recuperar_campo("email"); ?> >
	</p>
	<p>
		<label for="direccion">Dirección:</label>
		<textarea name="direccion" id="" cols="30" rows="10"></textarea>
	</p>
	<p>
		<label for="comentario">Comentario:</label>
		<textarea name="comentario" id="" cols="30" rows="10"></textarea>
	</p>
	<p>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="borrar" value="Borrar">
	</p>
</form>