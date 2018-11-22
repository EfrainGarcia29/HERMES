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
			WHERE u.idTipoUsuario = '3'");
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
			print_r($localidad);
	}
	

	public function crearClientes($data){

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
					$array= array('status'=>'failinsertoClientes');
			}
		}else{
			
			$array= array('status'=>'failinsertoUsuarios');
		}
		
		return print_r(json_encode($array));
	}
	
	
		

}
?>