<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" name="" id="form" >
	<fieldset>
		<legend>Año a calcular</legend>
		<input type="text" name="actual" placeholder="2015" required autofocus pattern="\d{4}" maxlength="4" <?php mostrar_campo("actual"); ?> >
	</fieldset>
	<?php mostrar_errores_campo("valida", $errores)?>
	<fieldset>
		<legend>Fecha de nacimiento</legend>
		<p>	
			<label for="dia">Día:</label>
			<select name="dia" id="dia"
			<?php mostrar_campo("dia"); ?> >
			<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<?php
				mostrar_errores_campo("dia",$errores);
			?>
			</p>

			<p>
			<label for="mes">Mes:</label>
			<select name="mes" id="mes"
			<?php mostrar_campo("mes"); ?> >
				<option value="1">Enero</option>
				<option value="2">Febrero</option>
				<option value="3">Marzo</option>
				<option value="4">Abril</option>
				<option value="5">Mayo</option>
				<option value="6">Junio</option>
				<option value="7">Julio</option>
				<option value="8">Agosto</option>
				<option value="9">Septiembre</option>
				<option value="10">Octube</option>
				<option value="11">Nobiembre</option>
				<option value="12">Diciembre</option>
			</select>
			<?php
				mostrar_errores_campo("mes",$errores);
			?>
			</p>
			<p>
			<label for="anio">Año:</label>
			<input type="text" name="anio" placeholder="1992" required maxlength="4" pattern="\d{4}"
			<?php mostrar_campo("anio"); ?> >
			<?php
				mostrar_errores_campo("anio",$errores);
			?>
		</p>
		<p>
			<input type="submit" name="" value="Enviar">
			<input type="reset" name="form" value="Borrar">
		</p>

	</fieldset>
</form>