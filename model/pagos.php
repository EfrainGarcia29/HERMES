<?php 

class pagos
	{
		private $idPago;
		private $valorPago;
		private $fechaPago;
		private $idPrestamos;
		private $Clientes_idUsuarios;

		public function __construct($idPago, $valorPago, $fechaPago,$idPrestamos,$Clientes_idUsuarios){

			$this->idPago = $idPago;
			$this->valorPago = $valorPago;
			$this->fechaPago = $fechaPago;
			$this->idPrestamos = $idPrestamos;
			$this->Clientes_idUsuarios = $Clientes_idUsuarios;
			
			
			
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
		
		public function getClientes_idUsuarios() {
			return $this->Clientes_idUsuarios;
		}

		public function setClientes_idUsuarios($Clientes_idUsuarios) {
			$this->Clientes_idUsuarios = $Clientes_idUsuarios;
		}
	}
 ?>