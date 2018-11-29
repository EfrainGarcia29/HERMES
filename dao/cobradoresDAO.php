<?php 
require_once('../database/conexion.php');
require_once('../model/cobradores.php');

class cobradoresDAO
{
	public function allCobradores(){
		$db = Db::conectar();
		$usuarios = [];
		$user = $db->query("SELECT u.idUsuarios, u.nombres, u.apellidos, c.cedula, c.telefono, u.email, u.usuario, u.password, e.estado, l.nombre as nombrelocalidad FROM usuarios as u 
			INNER JOIN cobradores as c  
			ON u.idUsuarios = c.idUsuarios 
			INNER JOIN estados as e 
			ON c.idEstado = e.idEstado 
			LEFT JOIN localidades as l
			ON c.idLocalidad = l.idLocalidad 
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
				$us['nombrelocalidad']
			);
			$usuarios[]=$u;
			
		}
		return $usuarios;
	}
	public function crearCobrador($data){

		$db = Db::conectar();
		$usuarios = [];
		//print_r($data);
		$query = $db->query("INSERT INTO usuarios (nombres, apellidos, usuario, password, email, img, idTipoUsuario
		) VALUES ('$data[nombres]', '$data[apellidos]', '$data[usuario]', '$data[password]', '$data[email]', '$data[img]', '$data[idTipoUsuario]')");
		$query2=null;
		if ($query) {
			$idUsuarios = $db->lastInsertId();
			$query2 = $db->query("INSERT INTO cobradores (idUsuarios, cedula, telefono, idEstado, idLocalidad) VALUES ('$idUsuarios', '$data[cedula]', '$data[telefono]', '$data[idEstado]','$data[idLocalidad]')");
			if ($query2){
					$array= array('status'=>'success');
			}else{
					$array= array('status'=>'failinsertoCobrador');
			}
		}else{
			
			$array= array('status'=>'failinsertoUsuarios');
		}
		
		return print_r(json_encode($array));
	}
	
	public function getCobradores($id){
		$db = Db::conectar();
		$usuarios = [];
		if ($id == '0') {
			$user = $db->query("SELECT * FROM usuarios as u 
				INNER JOIN cobradores as c  
				ON u.idUsuarios = c.idUsuarios  
				WHERE u.idTipoUsuario = '2'");
		}else{
			$user = $db->query("SELECT * FROM usuarios as u 
				INNER JOIN cobradores as c  
				ON u.idUsuarios = c.idUsuarios  
				WHERE u.idTipoUsuario = '2' AND u.idUsuarios = '$id'");
		}
			
		foreach ($user->fetchAll() as $us) {
			$usuarios[]=$us;
		}
		print_r(json_encode($usuarios));
	}
	
	public function editarCobradores($data){

		$db = Db::conectar();
		$usuarios = [];
		// 'aqui estoy';
		//print_r($data);
		$query = $db->query("UPDATE usuarios  SET nombres = '$data[nombres]', apellidos = '$data[apellidos]', usuario = '$data[usuario]', password = '$data[password]', email = '$data[email]', img = '$data[img]', idTipoUsuario = '2' WHERE idUsuarios = '$data[id]'");
		$query2=null;
		if ($query) {
			$query2 = $db->query("UPDATE cobradores  SET cedula = '$data[cedula]', telefono = '$data[telefono]', idEstado = '$data[idEstado]', idLocalidad = '$data[idLocalidad]' WHERE idUsuarios = '$data[id]'");
			if ($query2){
					$array= array('status'=>'success');
			}else{
					$array= array('status'=>'failEditarCobrador');
			}
		}else{
			
			$array= array('status'=>'failEditarUsuarios');
		}
		
		return print_r(json_encode($array));
	}
	
	
	public function eliminarCobradores($id){

		$db = Db::conectar();
		$usuarios = [];
		// 'aqui estoy';
		//print_r($data);
		 echo "DELETE FROM cobradores  WHERE idUsuarios = '$id'";
		$query = $db->query("DELETE FROM cobradores  WHERE idUsuarios = '$id'");
		if ($query) {
			$query2 = $db->query("DELETE FROM usuarios WHERE idUsuarios = '$id'");
			if ($query2){
					$array= array('status'=>'success');
			}else{
					$array= array('status'=>'failEliminarCobrador');
			}
		}else{
			
			$array= array('status'=>'failEditarUsuarios');
		}
		
		return print_r(json_encode($array));
	}

	
}

 ?>