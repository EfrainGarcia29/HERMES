<?php
require_once('../dao/estadosDAO.php');
require_once('../model/estados.php');
$objestadosDao = new estadosDAO();
header('Content-type: application/json; charset=utf-8');

if (isset($_GET['traerEstados'])) {
     //$user = new Usuario(null, $correo, $password, $create_at, $update_at);
     //$data = $_GET['data'];
     if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $resultado = $objestadosDao->mostrarEstados($id);
     }else{
          $resultado = $objestadosDao->mostrarEstados('0');    
     }
     return $resultado;
}

/******************************************/
/******************************************/
/*EDITAR PARA ESTADOS EL RESTO DE FUNCIONES*/
/******************************************/
/******************************************/
// if(isset($_GET['createLocalidad']) ){
    
//     //print_r($_POST['data']);

//   if (isset($_POST['data'])) {
//      $data = $_POST['data'];
//      $resultado = $objlocalidadDao->insertarLocalidad($data);
//      return $resultado;

//   }else{
//       $array = array('status'=>'errorDeEnvio');
//       print_r(json_encode($array));
//   }
// }


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