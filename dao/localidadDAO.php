<?php 

require_once('../database/conexion.php');
require_once('../model/localidad.php');

/**
 * 
 */
class localidadDAO
{
	public function alllocalidad(){

		$db = Db::conectar();
		$localidad = [];
		$local = $db->query("SELECT * FROM  localidades");
		foreach ($local->fetchAll() as $lo) {
			$l=new Localidad(
				$lo['idLocalidad'], 
				$lo['nombre'],
				$lo['idUsuarios']
			);
			$localidad[]=$l;
	
		}
		return $localidad;
	}
	
	
	public function insertarLocalidad($data){

		$db = Db::conectar();
		$usuarios = [];
		$query = $db->query("INSERT INTO usuarios (nombres, apellidos, usuario, password, email, img, idTipoUsuario
		) VALUES ('$data[nombres]', '$data[apellidos]', '$data[usuario]', '$data[password]', '$data[email]', '$data[img]', '$data[idTipoUsuario]')");
		$query2=null;
		if ($query) {
		
		$array= array('status'=>'success');
			
		}else{
			
			$array= array('status'=>'failinsertoLocalidad');
		}
		
		return print_r(json_encode($array));
	}

}
?>