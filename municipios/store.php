<?php
	require_once "../model/municipio.php"; 
	$municipio = new Municipio();
	$municipio->nombre = $_POST["nombre"];
	$filas = $municipio->insert();
	if($filas > 0){
		echo "Municiio insertado";
	}
	else{
		echo "No se inserto el municipio";
	}
?>