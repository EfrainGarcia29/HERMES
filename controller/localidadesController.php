<?php
require_once('../dao/localidadDAO.php');
require_once('../model/localidad.php');
$objlocalidadDao = new localidadDAO();
header('Content-type: application/json; charset=utf-8');

if (isset($_GET['traerLocalidades'])) {
     //$data = $_GET['data'];
     if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $resultado = $objlocalidadDao->mostrarLocalidad($id);
     }else{
          $resultado = $objlocalidadDao->mostrarLocalidad('0');    
     }
     return $resultado;
}

if(isset($_GET['createLocalidad']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
     $data = $_POST['data'];
     $resultado = $objlocalidadDao->insertarLocalidad($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

if(isset($_GET['editLocalidad']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
     $data = $_POST['data'];
     $resultado = $objlocalidadDao->editarLocalidad($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

if(isset($_GET['deleteLocalidad']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['id'])) {
     $id = $_POST['id'];
     $resultado = $objlocalidadDao->eliminarLocalidad($id);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

?> 