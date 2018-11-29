<?php
require_once('../dao/pagosDAO.php');
require_once('../model/pagos.php');
$objpagosDao = new PagosDAO();
header('Content-type: application/json; charset=utf-8');

if(isset($_GET['createPagos']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
     $data = $_POST['data'];
     $resultado = $objpagosDao->insertarPagos($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

if (isset($_GET['getPagos'])) {
     //$data = $_GET['data'];
     if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $resultado = $objpagosDao->getPagos($id);
     }else{
          $resultado = $objpagosDao->getPagos('0');    
     }
     return $resultado;
}

?>