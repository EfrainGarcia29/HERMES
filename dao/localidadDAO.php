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
		$local = $db->query("SELECT * FROM  localidades as lc");
		foreach ($local->fetchAll() as $lo) {
			$l=new Localidad(
				$lo['idLocalidad'], 
				$lo['nombre']
			);
			$localidad[]=$l;
	
		}
		return $localidad;
	}
	public function mostrarLocalidad($id){

		$db = Db::conectar();
		$localidad = [];
		if ($id != 0) {
			$local = $db->query("SELECT * FROM  localidades WHERE idLocalidad = '$id'");
		}else{
			$local = $db->query("SELECT * FROM  localidades");	
		}
		foreach ($local->fetchAll() as $lo) {
			$l=new Localidad(
				$lo['idLocalidad'], 
				$lo['nombre']
			);
			$localidad[]=$lo;
	
		}
		print_r(json_encode($localidad));
	}
	
	
	public function insertarLocalidad($data){

		$db = Db::conectar();
		$usuarios = [];
		$query = $db->query("INSERT INTO localidades (nombre) VALUES ('$data[nombre]')");
		if ($query) {
		
		$array= array('status'=>'success');
			
		}else{
			
			$array= array('status'=>'failinsertoLocalidad');
		}
		
		return print_r(json_encode($array));
	}
	
	public function editarLocalidad($data){

		$db = Db::conectar();
		$usuarios = [];
		$query = $db->query("UPDATE localidades SET nombre = '$data[nombre]' WHERE idLocalidad = '$data[id]'");
		if ($query) {
		
		$array= array('status'=>'success');
			
		}else{
			
			$array= array('status'=>'failinsertoLocalidad');
		}
		
		return print_r(json_encode($array));
	}
	
	
	public function eliminarLocalidad($id){

		$db = Db::conectar();
		$usuarios = [];
		$query = $db->query("DELETE FROM localidades WHERE idLocalidad = '$id'");
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