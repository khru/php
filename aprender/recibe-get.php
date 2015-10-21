<?php
	if(isset($_GET['dato'])){
		$dato = $_GET['dato'];
		echo $dato;
	} else{
		echo "<h1>No he recibido nada</h1>";
	}