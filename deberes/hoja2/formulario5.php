<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" name="form" id="form">
	<p>
		<label for="anio">Año:</label>
		<input type="text" name="anio" id="anio" placeholder="1992"  maxlength="4" required autofocus pattern="[0-9]{4}" <?php mostrar_campo("anio"); ?> >
		<?php
			 mostrar_errores_campo("anio", $errores);
		?>
	</p>
	<p>
		<input type="submit" name="form" value="Enviar">
		<input type="reset" name="form" value="Borrar">
	</p>
</form>