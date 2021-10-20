<?php 
  require_once "../model/municipio.php"; 
  $municipio = new Municipio();
  $municipios = $municipio->select();
  if(isset($_GET["accion"])){
  	switch ($_GET["accion"]) {
  		case '1':
  			$mensaje = "Municipio insertado";
  			$clase = "alert alert-success";
  			break;
  		case '2':
  			$mensaje = "Municipio no se inserto";
  			$clase = "alert alert-danger";
  			break;
  		case '3':
  			$mensaje = "Municipio actualizado";
  			$clase = "alert alert-success";
  			break;
  		case '4':
  			$mensaje = "Municipio no se actualizo";
  			$clase = "alert alert-danger";
  			break;
  		case '5':
  			$mensaje = "Municipio eliminado";
  			$clase = "alert alert-success";
  			break;
  		case '5':
  			$mensaje = "Municipio no se elimino";
  			$clase = "alert alert-danger";
  			break;
  	}
  }
  require_once "../view/municipios/indexview.php";
?>