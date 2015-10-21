<?php
	/**
	 * Esta función recive un campo del formulario, se comprueba si existe en $_POST, de ser así se muestra en el campo value
	 * @param  [String] $campo Campo del formulario
	 */
	function mostrar_campo($campo){
		if(isset($_POST[$campo])){
			echo 'value="' . $_POST[$campo] . '"'; 
		}
	}

	/**
	 * [mostrar_errores_campo description recive 2 parametros un array de errores y un campo por el cual acceder al array asociativo]
	 * @param  [String] $campo   [Campo del formulario para mostrar el error]
	 * @param  [Array] $errores [Array de errores]
	 */
	function mostrar_errores_campo($campo, $errores){
		if (isset($errores[$campo])) {
			echo '<span class="error">' . $errores[$campo] . '</span>';
		}
	}

	function ecuacion($a, $b, $c){
		if ($a == 0) {
			$sol = -$c / $b;
			echo "Debido a que a = 0, la solución es -c/b así que<br>X = -$c / $b = $sol";
		} else {
			//$discriminante = d
			$d = $b * $b - 4 *$a * $c;
			echo "El discriminante es = $d<br>";
			if($d > 0){
				$sol1 = (-$b + sqrt($d)) / (2 * $a);
				$sol2 = (-$b - sqrt($d)) / (2 * $a);
				echo "X1 = $sol1<br>X2 = $sol2<br>";	
			} elseif ($d == 0) {
				$sol =  -$b / (2 * $a);
				echo "X = $sol";
			} else {
				$solReal = -$b / (2 * $a);
				$solImaginaria = sqrt(-$d) / (2 * $a);
				echo "X1 = $solReal + {$solImaginaria}i<br>";
				echo "X1 = $solReal + -{$solImaginaria}i<br>";
			}
		}
	}
?>