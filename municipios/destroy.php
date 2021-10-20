<?php
	require_once "../model/municipio.php";
	$municipio = new municipio();
	$id = $_GET["id"];
	$filas = $municipio->delete($id); 
	if($filas > 0){
		header("location:index.php?accion=5");
	}
	else{
		header("location:index.php?accion=6");
	}
?>