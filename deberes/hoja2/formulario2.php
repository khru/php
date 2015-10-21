<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" name="form1" id="form1">
	<p>
		<label for="num1">Introduce el valor de a:</label>
		<input type="number" name="num1" id="num1" placeholder="Introduce un número" required autofocus  <?php mostrar_campo("num1"); ?> >
		<?php mostrar_errores_campo("num1", $errores); ?>
	</p>
	<p>
		<label for="num2">Introduce el valor de b:</label>
		<input type="text" name="num2" id="num2" placeholder="Introduce un número" required autofocus patter="\d{1}" <?php mostrar_campo("num2"); ?> >
		<?php mostrar_errores_campo("num2", $errores); ?>
	</p>
	<p>
		<label for="num3">Introduce el valor de c:</label>
		<input type="text" name="num3" id="num3" placeholder="Introduce un número" required autofocus patter="\d{1}"  <?php mostrar_campo("num3"); ?> >
		<?php mostrar_errores_campo("num3", $errores); ?>
	</p>
	<p>
		<input type="submit" name="form1" value="Enviar">
		<input type="reset" name="form1" value="Borrar">
	</p>
</form>