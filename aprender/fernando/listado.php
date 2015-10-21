<table>
	<tr>
		<td>Nombre</td>
		<td>Email</td>
		<td>tlf</td>
		<td>Dirección</td>
		<td>Editar</td>
		<td>Borrar</td>
	</tr>

	<?php

	$ssql = "SELECT * FROM contacto";

	//rs=resultado
	if($rs = mysqli_query($conexion, $ssql)){  //todo en una línea. Si mysqli_query($conexion....")  sería igual a rs.

		while($fila = mysqli_fetch_array($rs)){   //se le pasa el resultado.


			echo "<tr>"
			echo "<td>" . $fila['nombre']."</td>";
			echo "<td>" . $fila['email']."</td>";
			echo "<td>" . $fila['tlf']."</td>";
			echo "<td>" . $fila['direccion']."</td>";
			echo "<td><a href='update.php?id=".$fila['id_contacto']."'>Editar</a></td>";
			echo "<td><a href='update.php?id=".$fila['id_contacto']."'>Editar</a></td>";

		}  

	}

</table>