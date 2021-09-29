<?php 
	class Municipio{
		public $id;
		public $nombre;
		private $conexion;

		public function abrir(){
			try{
				$this->conexion = new PDO("mysql:host=localhost;dbname=torneo2176038", "root", "");
				$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				echo "Fallo en la conexion " . $e->getMessage();
			}
		}

		public function cerrar(){
			$this->conexion = null;
		}

		public function insert(){
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO municipios VALUES(null, ?)");
			$consulta->bindParam(1, $this->nombre);
			$consulta->execute();
			return $consulta->rowCount();
			$this->cerrar();
		}
	}
?>