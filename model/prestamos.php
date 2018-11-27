<?php 


class Prestamos
	{
		private $idPrestamos;
		private $prestamo;
		private $valorPorPagar;
		private $tasaInteres;
		private $cuota;
		private $fechaInicio;
		private $fechaFinal;
		private $idUsuarios;
		private $idEstadosPrestamos;

		public function __construct($idPrestamos, $prestamo, $valorPorPagar, $tasaInteres, $cuota, $fechaInicio, $fechaFinal, $idUsuarios, $idEstadosPrestamos){

			$this->idPrestamos = $idPrestamos;
			$this->prestamo = $prestamo;
			$this->valorPorPagar = $valorPorPagar;
			$this->tasaInteres = $tasaInteres;
			$this->cuota = $cuota;
			$this->fechaInicio = $fechaInicio;
			$this->fechaFinal = $fechaFinal;
			$this->idUsuarios = $idUsuarios;
			$this->idEstadosPrestamos = $idEstadosPrestamos;
		}

		public function getidPrestamos() {
			return $this->idPrestamos;
		}

		public function setidPrestamos($idPrestamos) {
			$this->idPrestamos = $idPrestamos;
		}

		public function getprestamo() {
			return $this->prestamo;
		}

		public function setprestamo($prestamo) {
			$this->prestamo = $prestamo;
		}

		public function getvalorPorPagar() {
			return $this->valorPorPagar;
		}

		public function setvalorPorPagar($valorPorPagar) {
			$this->valorPorPagar = $valorPorPagar;
		}
				
		public function gettasaInteres() {
			return $this->tasaInteres;
		}

		public function settasaInteres($tasaInteres) {
			$this->tasaInteres = $tasaInteres;
		}
		
		public function getcuota() {
			return $this->cuota;
		}

		public function setcuota($cuota) {
			$this->cuota = $cuota;
		}
		public function getfechaInicio() {
			return $this->fechaInicio;
		}

		public function setfechaInicio($fechaInicio) {
			$this->fechaInicio = $fechaInicio;
		}
		public function getfechaFinal() {
			return $this->fechaFinal;
		}

		public function setfechaFinal($fechaFinal) {
			$this->fechaFinal = $fechaFinal;
		}
		public function getidUsuarios() {
			return $this->idUsuarios;
		}

		public function setidUsuarios($idUsuarios) {
			$this->idUsuarios = $idUsuarios;
		}
		public function getidEstadosPrestamos() {
			return $this->idEstadosPrestamos;
		}

		public function setidEstadosPrestamos($idEstadosPrestamos) {
			$this->idEstadosPrestamos = $idEstadosPrestamos;
		}
	}
 ?>