<?php 


include ('usuarios.php');


class Clientes extends Usuarios {
		private $idUsuarios;
		private $direccion;
		private $cedula;
		private $idLocalidad;

		
		
		public function __construct($idUsuarios, $nombres, $apellidos, $cedula, $direccion, $email, $usuario, $password, $idLocalidad){

			$this->idUsuarios = $idUsuarios;
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->cedula = $cedula;
			$this->direccion = $direccion;
			$this->email = $email;
			$this->usuario = $usuario;
			$this->password = $password;
			$this->idLocalidad = $idLocalidad;
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

		public function getdireccion() {
			return $this->direccion;
		}

		public function setdireccion($direccion) {
			$this->direccion = $direccion;
		}
		public function getidLocalidad() {
			return $this->idLocalidad;
		}

		public function setidLocalidad($idLocalidad) {
			$this->idLocalidad = $idLocalidad;
		}

	}
 ?>