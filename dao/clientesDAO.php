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
		$user = $db->query("SELECT u.idUsuarios, u.nombres, u.apellidos, c.cedula, c.direccion, u.email, u.usuario, u.password, l.nombre as nombrelocalidad
					FROM usuarios  as u
					INNER JOIN clientes as c ON u.idUsuarios = c.idUsuarios
					LEFT JOIN localidades as l ON c.idLocalidad = l.idLocalidad
					WHERE u.idTipoUsuario =  '3'");
		foreach ($user->fetchAll() as $us) {
			$u=new Clientes(
				$us['idUsuarios'], 
				$us['nombres'],
				$us['apellidos'], 
				$us['cedula'], 
				$us['direccion'],
				$us['email'],
				$us['usuario'],
				$us['password'],
				$us['nombrelocalidad']
			);
			$usuarios[]=$u;
		}
		return $usuarios;
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
			$query2 = $db->query("INSERT INTO clientes (idUsuarios, direccion, cedula, telefono, idLocalidad) VALUES ('$idUsuarios', '$data[direccion]', '$data[cedula]', '$data[telefono]', '$data[idLocalidad]')");
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
	// public function getClientes($id){
	// 	$db = Db::conectar();
	// 	$usuarios = [];
	// 	if ($id == '0') {
	// 		$user = $db->query("SELECT * FROM usuarios as u 
	// 			INNER JOIN clientes as c  
	// 			ON u.idUsuarios = c.idUsuarios  
	// 			WHERE u.idTipoUsuario = '3'");
	// 	}else{
	// 		$user = $db->query("SELECT * FROM usuarios as u 
	// 			INNER JOIN clientes as c  
	// 			ON u.idUsuarios = c.idUsuarios  
	// 			WHERE u.idTipoUsuario = '3' AND u.idUsuarios = '$id'");
	// 	}
			
	// 	foreach ($user->fetchAll() as $us) {
	// 		$usuarios[]=$us;
	// 	}
	// 	print_r(json_encode($usuarios));
	// }
	
	public function editarClientes($data){

		$db = Db::conectar();
		$usuarios = [];
		// 'aqui estoy';
		//print_r($data);
		$query = $db->query("UPDATE usuarios  SET nombres = '$data[nombres]', apellidos = '$data[apellidos]', usuario = '$data[usuario]', password = '$data[password]', email = '$data[email]', img = '$data[img]', idTipoUsuario = '3' WHERE idUsuarios = '$data[id]'");
		$query2=null;
		if ($query) {
			$query2 = $db->query("UPDATE clientes  SET cedula = '$data[cedula]', telefono = '$data[telefono]', idLocalidad = '$data[idLocalidad]' WHERE idUsuarios = '$data[id]'");
			if ($query2){
					$array= array('status'=>'success');
			}else{
					$array= array('status'=>'failEditarClientes');
			}
		}else{
			
			$array= array('status'=>'failEditarUsuarios');
		}
		
		return print_r(json_encode($array));
	}
	public function getclientes($id){
		$db = Db::conectar();
		$usuarios = [];
		if ($id == '0') {
			$user = $db->query("SELECT * FROM usuarios as u 
				INNER JOIN clientes as c  
				ON u.idUsuarios = c.idUsuarios  
				WHERE u.idTipoUsuario = '3'");
		}else{
			$user = $db->query("SELECT * FROM usuarios as u 
				INNER JOIN clientes as c  
				ON u.idUsuarios = c.idUsuarios  
				WHERE u.idTipoUsuario = '3' AND u.idUsuarios = '$id'");
		}
			
		foreach ($user->fetchAll() as $us) {
			$usuarios[]=$us;
		}
		print_r(json_encode($usuarios));
	}
	public function eliminarClientes($id){

		$db = Db::conectar();
		$usuarios = [];
		// 'aqui estoy';
		//print_r($data);
		//echo "DELETE FROM clientes  WHERE idUsuarios = '$id'";
		$query = $db->query("DELETE FROM clientes  WHERE idUsuarios = '$id'");
		if ($query) {
			$query2 = $db->query("DELETE FROM usuarios WHERE idUsuarios = '$id'");
			if ($query2){
					$array= array('status'=>'success');
			}else{
					$array= array('status'=>'failEliminarCientes');
			}
		}else{
			
			$array= array('status'=>'failEliminarClientes');
		}
		
		return print_r(json_encode($array));
	}
}
?>