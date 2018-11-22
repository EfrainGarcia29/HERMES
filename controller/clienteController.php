<?php
require_once('../dao/clientesDAO.php');
require_once('../model/clientes.php');
$objusuarioDao = new clientesDAO();
header('Content-type: application/json; charset=utf-8');

if(isset($_GET['createcliente']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
        //   $user = new Usuario(null, $correo, $password, $create_at, $update_at);
     $data = $_POST['data'];
     $resultado = $objusuarioDao->crearClientes($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

?>