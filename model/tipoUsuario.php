<?php
class Usuarios 
	{
		private $idTipoUsuarios;
		public $descripcion;

		public function __construct($idTipoUsuarios, $descripcion){

			$this->idTipoUsuarios = $idTipoUsuarios;
			$this->descripcion = $descripcion;

		}

		public function getidTipoUsuarios() {
			return $this->idTipoUsuarios;
		}

		public function setidTipoUsuarios($idTipoUsuarios) {
			$this->idTipoUsuarios = $idTipoUsuarios;
		}

		public function getdescripcion() {
			return $this->descripcion;
		}

		public function setdescripcion($descripcion) {
			$this->descripcion = $descripcion;
		}
	}
 ?>