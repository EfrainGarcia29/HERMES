<?php 
require_once('../database/conexion.php');
require_once('../model/clientes.php');

/**
 * 
 */
class ClientesDAO
{
	public function allUsuarios(){

		$db = Db::conectar();
		$usuarios = [];
		$user = $db->query("SELECT u.idUsuarios, u.nombres, u.apellidos, c.cedula, c.direccion, u.email, u.usuario, u.password FROM usuarios u 
			INNER JOIN clientes c 
			ON u.idUsuarios = c.idUsuarios 
			WHERE u.idUsuarios = '3'");
		foreach ($user->fetchAll() as $us) {
			$u=new Clientes(
				$us['idUsuarios'], 
				$us['nombres'],
				$us['apellidos'], 
				$us['cedula'], 
				$us['direccion'],
				$us['email'],
				$us['usuario'],
				$us['password']
			);
			$usuarios[]=$u;
		}
		return $usuarios;
	}

}
?>