<?php 

class Localidad
	{
		private $idLocalidad;
		private $nombre;

		public function __construct($idLocalidad, $nombre){

			$this->idLocalidad = $idLocalidad;
			$this->nombre = $nombre;
			
			
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
		
	}
 ?>