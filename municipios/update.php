<?php
	require_once "../model/municipio.php"; 
	$municipio = new Municipio();
	$municipio->id = $_POST["id"];
	$municipio->nombre = $_POST["nombre"];
	$filas = $municipio->update();
	if($filas > 0){
		header("location:index.php?accion=3");
	}
	else{
		header("location:index.php?accion=4");
	}
?>