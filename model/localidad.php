<?php 

class Localidad
	{
		private $idLocalidad;
		private $nombre;
		private $idUsuarios;

		public function __construct($idLocalidad, $nombre, $idUsuarios){

			$this->idLocalidad = $idLocalidad;
			$this->nombre = $nombre;
			$this->idUsuarios = $idUsuarios;
			
			
		}
		public function getidLocalidad() {
			return $this->idLocalidad;
		}

		public function setidLocalidad($idLocalidad) {
			$this->idLocalidad = $idLocalidad;
		}
		
		
		public function getnombre() {
			return $this->nombre;
		}

		public function setnombre($nombre) {
			$this->nombre = $nombre;
		}
		
		
		public function getidUsuarios() {
			return $this->idUsuarios;
		}

		public function setidUsuarios($idUsuarios) {
			$this->idUsuarios = $idUsuarios;
		}
		
	}
 ?>