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
			$this->estado = $idEstadosPrestamos;
		}

		public function getidUsuarios() {
			return $this->idUsuarios;
		}

		public function setidUsuarios($idUsuarios) {
			$this->idUsuarios = $idUsuarios;
		}

		public function getcedula() {
			return $this->cedula;
		}

		public function setcedula($cedula) {
			$this->cedula = $cedula;
		}

		public function gettelefono() {
			return $this->telefono;
		}

		public function settelefono($telefono) {
			$this->telefono = $telefono;
		}
				
		public function getestado() {
			return $this->estado;
		}

		public function setestado($estado) {
			$this->estado = $estado;
		}
		
		public function getnombre() {
			return $this->nombre;
		}

		public function setnombre($nombre) {
			$this->nombre = $nombre;
		}
	}
 ?>