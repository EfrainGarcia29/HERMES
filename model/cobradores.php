<?php 

include("usuarios.php");

class Cobradores extends Usuarios
	{
		private $idUsuarios;
		private $cedula;
		private $telefono;

		public function __construct($idUsuarios, $nombres, $apellidos, $cedula, $telefono, $email, $usuario, $password, $estado, $nombre){

			$this->idUsuarios = $idUsuarios;
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->cedula = $cedula;
			$this->telefono = $telefono;
			$this->email = $email;
			$this->usuario = $usuario;
			$this->password = $password;
			$this->estado = $estado;
			$this->nombre = $nombre;
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