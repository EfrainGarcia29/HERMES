<?php 

class Pagos
	{
		private $idPago;
		private $valorPago;
		private $fechaPago;
		private $idPrestamos;
		private $idUsuarios;

		public function __construct($idPago, $valorPago, $fechaPago,$idPrestamos,$idUsuarios){

			$this->idPago = $idPago;
			$this->valorPago = $valorPago;
			$this->fechaPago = $fechaPago;
			$this->idPrestamos = $idPrestamos;
			$this->idUsuarios = $idUsuarios;
			
			
			
		}
		public function getidPago() {
			return $this->idPago;
		}

		public function setidPago($idPago) {
			$this->idPago = $idPago;
		}
		
		public function getvalorPago() {
			return $this->valorPago;
		}

		public function setvalorPago($valorPago) {
			$this->valorPago = $valorPago;
		}
		
		public function getfechaPago() {
			return $this->fechaPago;
		}

		public function setfechaPago($fechaPago) {
			$this->fechaPago = $fechaPago;
		}
		
		public function getidPrestamos() {
			return $this->idPrestamos;
		}

		public function setidPrestamos($idPrestamos) {
			$this->idPrestamos = $idPrestamos;
		}
		
		public function getidUsuarios() {
			return $this->idUsuarios;
		}

		public function setidUsuarios($idUsuarios) {
			$this->idUsuarios = $idUsuarios;
		}
	}
 ?>