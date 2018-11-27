<?php
class Usuarios 
	{
		private $idUsuarios;
		public $nombreEntidad;

		public function __construct($idUsuarios, $nombreEntidad){

			$this->idTipoUsuarios = $idUsuarios;
			$this->descripcion = $nombreEntidad;

		}

		public function getidUsuarios() {
			return $this->idUsuarios;
		}

		public function setidUsuarios($idUsuarios) {
			$this->idUsuarios = $idUsuarios;
		}

		public function getnombreEntidad() {
			return $this->nombreEntidad;
		}

		public function setnombreEntidad($nombreEntidad) {
			$this->nombreEntidad = $nombreEntidad;
		}
	}
 ?>