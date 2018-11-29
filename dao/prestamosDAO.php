<?php
require_once('../database/conexion.php');
require_once('../model/prestamos.php');

/**
 * 
 */
class PrestamosDAO
{
	public function allprestamos(){

		$db = Db::conectar();
		$prestamos = [];
		$pres = $db->query("SELECT * FROM prestamos");
		foreach ($pres->fetchAll() as $us) {
			$p=new Prestamos(
				$us['idPrestamos'], 
				$us['prestamo'],
				$us['valorPorPagar'], 
				$us['tasaInteres'], 
				$us['cuota'],
				$us['fechaInicio'],
				$us['fechaFinal'],
				$us['idUsuarios'],
				$us['idEstadosPrestamos']
			);
			$prestamos[]=$p;
		}
		return $prestamos;
	}
	
	public function insertarPrestamo($data){

		$db = Db::conectar();
		$usuarios = [];
		$query = $db->query("INSERT INTO prestamos (prestamo, valorPorPagar, tasaInteres, cuota, fechaInicio, fechaFinal, idUsuarios, idEstadosPrestamos) 
		VALUES ('$data[valorPrestamo]', '$data[valorPrestamo]', '$data[tasasInteres]', '$data[cuotas]', NOW(), NOW(), '$data[usuario]', '1')");
		if ($query) {
		
		$array= array('status'=>'success');
			
		}else{
			
			$array= array('status'=>'failinsertoPrestamo');
		}
		
		return print_r(json_encode($array));
	}
	
	public function getPrestamos($id){

		$db = Db::conectar();
		$prestamos = [];
		if ($id != 0) {
			$prestamo = $db->query("SELECT * FROM prestamos LEFT JOIN usuarios ON prestamos.idUsuarios = usuarios.idUsuarios WHERE prestamos.idPrestamos = '$id'");
		}else{
			$prestamo = $db->query("SELECT * FROM prestamos LEFT JOIN usuarios ON prestamos.idUsuarios = usuarios.idUsuarios ");	
		}
		foreach ($prestamo->fetchAll() as $pre) {
			$prestamos[]=$pre;
	
		}
		print_r(json_encode($prestamos));
	}
}

?>