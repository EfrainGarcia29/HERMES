<?php 

include ("usuarios.php");

class Estados 
	{
		private $idEstados;
		private $estado;
		

		public function __construct($idEstados, $estado){

			$this->idEstado = $idEstado;
			$this->estado = $estado;
		}

		public function getidEstados() {
			return $this->idUsuarios;
		}

		public function setidEstados($idEstadoss) {
			$this->idEstados = $idEstados;
		}

		public function getestado() {
			return $this->estado;
		}
				
		public function setestado($nombre) {
			$this->nombre = $nombre;
		}


	}
 ?>