<?php
	require_once "../model/municipio.php"; 
	$municipio = new Municipio();
	$municipio->nombre = $_POST["nombre"];
	$filas = $municipio->insert();
	if($filas > 0){
		header("location:index.php?accion=1");
	}
	else{
		header("location:index.php?accion=2");
	}
?>