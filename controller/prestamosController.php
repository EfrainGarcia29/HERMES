<?php
require_once('../dao/prestamosDAO.php');
require_once('../model/prestamos.php');
$objprestamoDao = new PrestamosDAO();
header('Content-type: application/json; charset=utf-8');

// if (isset($_GET['traerLocalidades'])) {
//      //$data = $_GET['data'];
//      if (isset($_GET['id'])) {
//           $id = $_GET['id'];
//           $resultado = $objlocalidadDao->mostrarLocalidad($id);
//      }else{
//           $resultado = $objlocalidadDao->mostrarLocalidad('0');    
//      }
//      return $resultado;
// }

if(isset($_GET['createPrestamos']) ){
    
    //print_r($_POST['data']);

   if (isset($_POST['data'])) {
     $data = $_POST['data'];
     $resultado = $objprestamoDao->insertarPrestamo($data);
     return $resultado;

   }else{
       $array = array('status'=>'errorDeEnvio');
       print_r(json_encode($array));
   }
}

if (isset($_GET['getPrestamos'])) {
     //$data = $_GET['data'];
     if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $resultado = $objprestamoDao->getPrestamos($id);
     }else{
          $resultado = $objprestamoDao->getPrestamos('0');    
     }
     return $resultado;
}

// if(isset($_GET['editLocalidad']) ){
    
//     //print_r($_POST['data']);

//   if (isset($_POST['data'])) {
//      $data = $_POST['data'];
//      $resultado = $objlocalidadDao->editarLocalidad($data);
//      return $resultado;

//   }else{
//       $array = array('status'=>'errorDeEnvio');
//       print_r(json_encode($array));
//   }
// }

// if(isset($_GET['deleteLocalidad']) ){
    
//     //print_r($_POST['data']);

//   if (isset($_POST['id'])) {
//      $id = $_POST['id'];
//      $resultado = $objlocalidadDao->eliminarLocalidad($id);
//      return $resultado;

//   }else{
//       $array = array('status'=>'errorDeEnvio');
//       print_r(json_encode($array));
//   }
// }

?> 