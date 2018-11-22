<?php 
require_once('../database/conexion.php');
require_once('../model/cobradores.php');

class cobradoresDAO
{
	public function allCobradores(){
		$db = Db::conectar();
		$usuarios = [];
		$user = $db->query("SELECT u.idUsuarios, u.nombres, u.apellidos, c.cedula, c.telefono, u.email, u.usuario, u.password, e.estado, l.nombre FROM usuarios as u 
			INNER JOIN cobradores as c  
			ON u.idUsuarios = c.idUsuarios 
			INNER JOIN estados as e 
			ON c.idEstado = e.idEstado 
			LEFT JOIN localidades as l 
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
	public function crearCobradores($data){

		$db = Db::conectar();
		$usuarios = [];
		// 'aqui estoy';
		//print_r($data);
		$query = $db->query("INSERT INTO usuarios (nombres, apellidos, usuario, password, email, img, idTipoUsuario
		) VALUES ('$data[nombres]', '$data[apellidos]', '$data[usuario]', '$data[password]', '$data[email]', '$data[img]', '$data[idTipoUsuario]')");
		$query2=null;
		if ($query) {
			$idUsuarios = $db->lastInsertId();
			$query2 = $db->query("INSERT INTO clientes (idUsuarios, direccion, telefono, cedula, idLocalidad) VALUES ('$idUsuarios', '$data[direccion]', '$data[telefono]', '$data[cedula]', '$data[idLocalidad]')");
			if ($query2){
					$array= array('status'=>'success');
			}else{
					$array= array('status'=>'failinsertoCocrador');
			}
		}else{
			
			$array= array('status'=>'failinsertoUsuarios');
		}
		
		return print_r(json_encode($array));
	}

	
}

 ?>