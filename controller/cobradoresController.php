<?php
require_once('../dao/cobradoresDAO.php');
require_once('../model/cobradores.php');
$objcobradoresDao = new cobradoresDAO();
header('Content-type: application/json; charset=utf-8');

if(isset($_GET['createcobrador']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
        //   $user = new Usuario(null, $correo, $password, $create_at, $update_at);
     $data = $_POST['data'];
     $resultado = $objcobradoresDao->crearCobrador($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}


if (isset($_GET['getCobradores'])) {
    if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $resultado = $objcobradoresDao->getCobradores($id);
     }else{
          $resultado = $objcobradoresDao->getCobradores('0');    
     }
   return $resultado;
}

if(isset($_GET['editarcobrador']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
     $data = $_POST['data'];
     $resultado = $objcobradoresDao->editarCobradores($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

if(isset($_GET['deleteCobrador']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['id'])) {
     $id = $_POST['id'];
     $resultado = $objcobradoresDao->eliminarCobradores($id);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

?>