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

		public function select(){
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM municipios");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			return $consulta->fetchAll();
			$this->cerrar();
		}

		public function update(){
			$this->abrir();
			$consulta = $this->conexion->prepare("UPDATE municipios SET nombre=? WHERE id=?");
			$consulta->bindParam(1, $this->nombre);
			$consulta->bindParam(2, $this->id);
			$consulta->execute();
			return $consulta->rowCount();
			$this->cerrar();
		}

		public function find($id){
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM municipios WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$municipios = $consulta->fetchAll();
			return $municipios[0];
			$this->cerrar();
		}
		public function delete($id){
			$this->abrir();
			$consulta = $this->conexion->prepare("DELETE FROM municipios WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->execute();
			return $consulta->rowCount();
			$this->cerrar();
		}


	}
?>