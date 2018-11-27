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
		$pag = $db->query("SELECT * FROM pagos");
		foreach ($pag->fetchAll() as $us) {
			$p=new Pagos(
				$us['idPago'], 
				$us['valorPago'],
				$us['fechaPago'],
				$us['idPrestamos'], 
				$us['Clientes_idUsuarios']
			);
			$pagos[]=$p;
		}
		return $pagos;
	}
}
?>