<?php
require_once('../dao/cobradoresDAO.php');
require_once('../model/cobradores.php');
$objusuarioDao = new cobradoresDAO();
header('Content-type: application/json; charset=utf-8');

if(isset($_GET['createcobrador']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
        //   $user = new Usuario(null, $correo, $password, $create_at, $update_at);
     $data = $_POST['data'];
     $resultado = $objusuarioDao->crearCobrador($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

?>