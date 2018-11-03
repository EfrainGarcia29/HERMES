<?php 

class Cobradores
	{
		private $idUsuarios;
		private $nombres;
		private $apellidos;
		private $cedula;
		private $telefono;
		private $email;
		private $usuario;
		private $password;
		private $estado;
		private $nombre;

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

		public function gettelefono() {
			return $this->telefono;
		}

		public function settelefono($telefono) {
			$this->telefono = $telefono;
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