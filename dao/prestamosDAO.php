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
}
?>