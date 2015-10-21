<?php 
	/**
	 * [abrir_conxion description]
	 * @param  [String] $host    [description]
	 * @param  [String] $usuario [description]
	 * @param  [String] $pass    [description]
	 * @param  [String] $bd      [description]
	 * @return [type]          [description]
	 */
	function abrir_conxion($host, $usuario, $pass, $bd){
		$conexion = mysqli_connect($host, $usuario, $pass, $bd);
		//$conexion = mysqli_connect("192.168.56.101", "root", "123", "agenda");
		if($conexion){
			mysqli_set_charset($conexion, "utf8");
			return $conexion;
		} else {
			// Para aprender mostramos un mensaje, pero lo normal sería un false
			echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    		echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
			exit;
		}
	}

	/**
	 * Función de desconexión
	 * @param  [Mysqli] $conexion enlace que deamos cerrar
	 */
	function cerrar_conexion($conexion){
		mysqli_close($conexion);
	}
?>