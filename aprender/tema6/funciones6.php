<?php
//FUNCION mostrar_errores
function mostrar_errores($errores){
	echo '<ul class="listaerrores">';
		foreach ($errores as $error) {
			# recorremos la el array de errores
			echo "<li>$error</li>";
		}
	echo '</ul>';
}

// FUNCION de mostrar campo
function mostrar_campo($campo){

	if(isset($_POST[$campo])){
		echo 'value="' . $_POST[$campo] . '"'; 
	}
}
//Funcion mostrar_errores_campo
function mostrar_errores_campo($campo, $errores){
	//si existe la dentro del array de errores con clave = campo la mostraras
	if (isset($errores[$campo])) {
		echo '<span class="errorf">' . $errores[$campo] . '</span>';
	}
}
?>