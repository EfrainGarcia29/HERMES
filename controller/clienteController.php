<?php
require_once('../dao/clientesDAO.php');
require_once('../model/clientes.php');
$objusuariosDao = new clientesDAO();
header('Content-type: application/json; charset=utf-8');

if(isset($_GET['createcliente']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
        //   $user = new Usuario(null, $correo, $password, $create_at, $update_at);
     $data = $_POST['data'];
     $resultado = $objusuariosDao->crearClientes($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}
if (isset($_GET['getClientes'])) {
    if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $resultado = $objusuariosDao->getClientes($id);
     }else{
          $resultado = $objusuariosDao->getClientes('0');    
     }
   return $resultado;
}

if(isset($_GET['editarclientes']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
     $data = $_POST['data'];
     $resultado = $objusuariosDao->editarClientes($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}
if(isset($_GET['deleteClientes']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['id'])) {
     $id = $_POST['id'];
     $resultado = $objusuariosDao->eliminarClientes($id);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

?>