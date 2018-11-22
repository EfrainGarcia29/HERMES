<?php
class Usuarios 
	{
		private $idUsuarios;
		public $nombres;
		public $apellidos;
		public $usuario;
		public $password;
		public $email;
		private $idTipoUsuario;

		public function __construct($idUsuarios, $nombres, $apellidos, $usuario, $password, $email, $idTipoUsuario){

			$this->idUsuarios = $idUsuarios;
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->usuario = $usuario;
			$this->password = $password;
			$this->email = $email;
			$this->estado = $idTipoUsuario;
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
		
		public function getemail() {
			return $this->email;
		}

		public function setemail($email) {
			$this->email = $email;
		}

		public function getidTipoUsuario() {
			return $this->idTipoUsuario;
		}

		public function setidTipoUsuario($idTipoUsuario) {
			$this->estado = $idTipoUsuario;
		}

	}
 ?>