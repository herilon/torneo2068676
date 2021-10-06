<?php 
  require_once "../model/municipio.php"; 
  $municipio = new Municipio();
  $municipios = $municipio->select();
  require_once "../view/municipios/indexview.php";
?>