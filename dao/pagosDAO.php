<?php
require_once('../database/conexion.php');
require_once('../model/pagos.php');

/**
 * 
 */
class PagosDAO
{
	public function allpagos(){

		$db = Db::conectar();
		$pagos = [];
		$pag = $db->query("SELECT p.idPago, p.valorPago, p.fechaPago, pres.prestamo, u.nombres
							FROM pagos AS p
							INNER JOIN clientes AS c ON p.idUsuarios = c.idUsuarios
							INNER JOIN prestamos AS pres ON p.idPrestamos = pres.idPrestamos
							INNER JOIN usuarios AS u ON c.idUsuarios = u.idUsuarios
							WHERE u.idTipoUsuario =  '3'");
		foreach ($pag->fetchAll() as $us) {
			$p=new Pagos(
				$us['idPago'], 
				$us['valorPago'],
				$us['fechaPago'],
				$us['prestamo'], 
				$us['nombres']
			);
			$pagos[]=$p;
		}
		return $pagos;
	}
	public function insertarPagos($data){

		$db = Db::conectar();
		$usuarios = [];
		$query = $db->query("INSERT INTO pagos (valorPago, fechaPago, idPrestamos, idUsuarios) VALUES ('$data[valorPago]', NOW(), '$data[idPrestamos]', '$data[idUsuarios]')");
		if ($query) {
		
		$array= array('status'=>'success');
			
		}else{
			
			$array= array('status'=>'failinsertoPago');
		}
		
		return print_r(json_encode($array));
	}
	
	
	public function getPagos($id){

		$db = Db::conectar();
		$pagos = [];
		if ($id != 0) {
			$pago = $db->query("SELECT * FROM pagos 
			LEFT JOIN prestamos ON pagos.idPrestamos = prestamos.idPrestamos 
			LEFT JOIN usuarios ON pagos.idUsuarios = usuarios.idUsuarios WHERE pagos.idPrestamos = '$id'");
		}else{
			$pago = $db->query("SELECT * FROM pagos 
			LEFT JOIN prestamos ON pagos.idPrestamos = prestamos.idPrestamos 
			LEFT JOIN usuarios ON pagos.idUsuarios = usuarios.idUsuarios ");	
		}
		foreach ($pago->fetchAll() as $pag) {
			$pagos[]=$pag;
	
		}
		print_r(json_encode($pagos));
	}
}

?>