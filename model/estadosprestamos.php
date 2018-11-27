<?php 

include ("usuarios.php");

class Estados_Prestamos
	{
		private $idEstadosPrestamos;
		private $estado;
		

		public function __construct($idEstadosPrestamos, $estado){

			$this->idEstadosPrestamos = $idEstadosPrestamos;
			$this->estado = $estado;
		}

		public function getidEstadosPrestamos() {
			return $this->idEstadosPrestamos;
		}

		public function setidEstadosPrestamos($idEstadosPrestamos) {
			$this->idEstadosPrestamos = $idEstadosPrestamos;
		}

		public function getestado() {
			return $this->estado;
		}
				
		public function setestado($estado) {
			$this->estado = $estado;
		}
	}
 ?>