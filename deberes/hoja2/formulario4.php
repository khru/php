<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" name="form1" id="form1">
	<p>
		<label for="anio">Introduce el año:</label>
		<input type="number" name="anio" id="anio" placeholder="Introduce un número" min="0" max="9999" required autofocus pattern="\d{1}" maxlength="4" <?php mostrar_campo("anio"); ?> >
		<?php mostrar_errores_campo("anio", $errores); ?>
	</p>
	<p>
		<input type="submit" name="form1" value="Enviar">
		<input type="reset" name="form1" value="Borrar">
	</p>
</form>