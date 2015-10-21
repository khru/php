<?php

	function mostrar_campo($campo){
		if(isset($_POST[$campo])){
			echo 'value="' . $_POST[$campo] . '"'; 
		}
	}

	function mostrar_errores_campo($campo, $errores){
		if (isset($errores[$campo])) {
			echo '<span class="error">' . $errores[$campo] . '</span>';
		}
	}

	function domingo_pascua($x){
		$a = $x % 19;
		$b = $x % 4;
		$c = $x % 7;
		$d = (19 * $a +24) % 30;
		$e = ((2 * $b) + (4 * $c) + (6 * $d) + 5) % 7;
		if ( $d + $e < 10 ) {
	        $dia = $d + $e + 22;
	        $mes = 3; // marzo
	        }
	    else {
	        $dia = $d + $e - 9;
	        $mes = 4; //abril
	    }
		# Excepciones especiales (según artículo)
	    if ( $dia == 26  and $mes == 4 ) { // 4 = abril
	        $dia = 19;
		}
	    if ( $dia == 25 and $mes == 4 and $d==28 and $e == 6 and $a >10 ) { // 4 = abril
	        $dia = 18;
	    }
	    $ret = $dia.'-'.$mes.'-'.$x;
		return ($ret);
	}
?>