<?php 
require_once('../database/conexion.php');
require_once('../model/cobradores.php');

class cobradoresDAO
{
	public function allCobradores(){

		$db = Db::conectar();
		$usuarios = [];
		$user = $db->query("SELECT u.idUsuarios, u.nombres, u.apellidos, c.cedula, c.telefono, u.email, u.usuario, u.password, e.estado, l.nombre FROM usuarios u 
			INNER JOIN cobradores c  
			ON u.idUsuarios = c.idUsuarios 
			INNER JOIN estados e 
			ON c.idEstado = e.idEstado 
			LEFT JOIN localidades l 
			ON c.idUsuarios = l.idUsuarios 
			WHERE u.idTipoUsuario = '2'");
		foreach ($user->fetchAll() as $us) {
			$u = new Cobradores(
				$us['idUsuarios'], 
				$us['nombres'],
				$us['apellidos'], 
				$us['cedula'], 
				$us['telefono'],
				$us['email'],
				$us['usuario'],
				$us['password'],
				$us['estado'],
				$us['nombre']
			);
			$usuarios[]=$u;
		}
		return $usuarios;
	}
	
}

 ?>