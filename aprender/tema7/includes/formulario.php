<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" name="form" id="form">
	<p>
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" value="<?php if($_GET) echo $fila['nombre']; if(isset($_POST['nombre'])) echo $_POST['nombre'] ?>" placeholder="Introduce un nombre" autofocus>
	</p>
	<p>
		<label for="email">E-mail:</label>
		<input type="text" name="email" value="<?php if($_GET) echo $fila['email']; if(isset($_POST['email'])) echo $_POST['email'] ?>" placeholder="Introduce un email" autofocus>
	</p>
	<p>
		<label for="telf">Teléfono:</label>
		<input type="tel" name="telf" value="<?php if($_GET) echo $fila['telf']; if(isset($_POST['telf'])) echo $_POST['telf'] ?>" placeholder="655417682" autofocus>
	</p>
	<p>
		<label for="direccion">Dirección:</label>
		<textarea name="direccion" id="direccion" value="<?php if($_GET){ echo $fila['direccion'];} if(isset($_POST['direccion'])){ echo $_POST['direccion'];} ?>" cols="30" rows="10"></textarea>
	</p>
	<p>
		<input type="submit" name="form" value="<?php if ($_GET){ echo 'Editar';} else { echo 'Insertar';} ?>">
		<input type="reset" name="form" value="Borrar">
		<?php 
			if($_GET){
		  	//echo <input type="hidden" name="id_contacto" value=" . $">"
		}
		?>
	</p>
</form>