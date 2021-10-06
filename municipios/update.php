<?php
	require_once "../model/municipio.php"; 
	$municipio = new Municipio();
	$municipio->id = $_POST["id"];
	$municipio->nombre = $_POST["nombre"];
	$filas = $municipio->update();
	if($filas > 0){
		echo "Municiio actualizado";
	}
	else{
		echo "No se actualizo el municipio";
	}
?>