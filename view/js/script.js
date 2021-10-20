function eliminarmunicipio(id){
	if(confirm("Desea eliminar este municipio")){
		window.location = "destroy.php?id=" + id;
	}
	
}