<?php 

class Clientes
	{
		private $idUsuarios;
		private $nombres;
		private $apellidos;
		private $cedula;
		private $direccion;
		private $email;
		private $usuario;
		private $password;

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

		public function getnombres() {
			return $this->nombres;
		}

		public function setnombres($nombres) {
			$this->nombres = $nombres;
		}

		public function getapellidos() {
			return $this->apellidos;
		}

		public function setapellidos($apellidos) {
			$this->apellidos = $apellidos;
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

		public function getemail() {
			return $this->email;
		}

		public function setemail($email) {
			$this->email = $email;
		}

		public function getusuario() {
			return $this->usuario;
		}

		public function setusuario($usuario) {
			$this->usuario = $usuario;
		}

		public function getpassword() {
			return $this->password;
		}

		public function setpassword($password) {
			$this->password = $password;
		}

	}
 ?>