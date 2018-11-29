<?php 
require_once('../database/conexion.php');
require_once('../model/usuarios.php');

class usuariosDAO {

	public function validarUsuarios($email){

		$db = Db::conectar();
		$sql = $db->prepare('SELECT COUNT(1) AS Validar FROM usuarios WHERE usuarios.email = :email');
		$sql->execute(
			array('email' => $email)
		);
		$validar = $sql->fetch();
		return $validar[0];
	}

	public function validarLogin($email, $password){
		$db = Db::conectar();
		$sql = $db->prepare('SELECT COUNT(1) AS Validar FROM usuarios WHERE usuarios.email = :email AND usuarios.password = :password');
		$sql->execute( 
			array('email' => $email, 'password' => $password)
		);
		
		$validar = $sql->fetch();
		return $validar[0];
	}
	
	
	public function dataUser($email){
		$db = Db::conectar();
		$sql = $db->prepare('SELECT * FROM usuarios WHERE usuarios.email = :email');
		$sql->execute(
			array('email' => $email)
		);
		$validar = $sql->fetchAll();
		return $validar;
	}

	public function getUsuarioLogin($email){
		$db = Db::conectar();
		$usuarios = [];
		$user = $db->query("SELECT * FROM usuarios WHERE usuarios.email = '$email'");
		foreach ($user->fetchAll() as $us) {
			$usuarios[]=$us;
		}
		return $usuarios;
	}
}
?>