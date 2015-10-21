<table border="1" align="center">
	<tr>
		<td>Nombre</td>
		<td>Email</td>
		<td>Tel</td>
		<td>Dirección</td>
		<td>Editar</td>
		<td>Borrar</td>
	</tr>

<?php
	$ssql = "SELECT * FROM contactos";
	//rs = resultado
	if ($rs = mysqli_query($conexion, $ssql)) {
		//mysqli_query($conexion, $ssql) devuelve o el resultado o un false, si es false es un error sino mostrarlo
		while ($fila = mysqli_fetch_array($rs)) {
			echo "<tr>";
			echo "<td>" . $fila['nombre'] . "</td>";
			echo "<td>" . $fila['email'] . "</td>";
			echo "<td>" . $fila['telf'] . "</td>";
			echo "<td>" . $fila['direccion'] . "</td>";
			echo "<td><a href='update.php?id=". urldecode($fila['id_contacto']) ."'>Editar</a></td>";
			echo "<td><a href='update.php?id=". urlencode($fila['id_contacto']) ."'>Borrar</a></td>";
		}
	}
?>
</table>