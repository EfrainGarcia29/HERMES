<?php 

include ("usuarios.php");

class Clientes extends Usuarios  
	{
		private $idUsuarios;
		private $direccion;
		private $cedula;

		
		
		public function __construct($idUsuarios, $nombres, $apellidos, $cedula, $direccion, $email, $usuario, $password){

			$this->idUsuarios = $idUsuarios;
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->cedula = $cedula;
			$this->direccion = $direccion;
			$this->email = $email;
			$this->usuario = $usuario;
			$this->password = $password;
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

	}
 ?>