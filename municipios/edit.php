<?php
  require_once "../model/municipio.php"; 
  $municipio = new Municipio();
  $id = $_GET["id"];
  $municipioEncontrado = $municipio->find($id);
  require_once "../view/municipios/editview.php"; 

?>