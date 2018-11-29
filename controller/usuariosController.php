<?php 
require_once('../dao/usuariosDAO.php');
require_once('../model/usuarios.php');
$objusuarioDao = new usuariosDAO(); 

if (isset($_GET['login'])) {

    if (isset($_POST['email']) && isset($_POST['password'])) {
        echo 'Bienvenido ';
        $email = $_POST['email'];
        $password = $_POST['password'];
        $existe = $objusuarioDao->validarLogin($email, $password);

        if ($existe == '1') {
            $usu = $objusuarioDao->getUsuarioLogin($email);
            error_reporting(E_ALL ^ E_DEPRECATED);
	        ob_start();
            session_start();
            if(empty($_SESSION['usuario']) || $_SESSION['usuario'] != ""){
                $_SESSION['usuario']="";
            }
            
            $_SESSION['usuario'] = $usu[0];
            //print_r ($_SESSION['usuario']);
            echo 'Bienvenido '.$email;
            if ($_SESSION['usuario']['idTipoUsuario'] == '1') {
                echo '<script>window.location="../view/clientes.php";</script>';
            }else if($_SESSION['usuario']['idTipoUsuario'] == '2'){
                echo '<script>window.location="../view/vCobradores.php";</script>';
            }else if($_SESSION['usuario']['idTipoUsuario'] == '3'){
                echo '<script>window.location="../view/vClientes.php";</script>';
            }
        } else {
            echo 'Este '.$email.' no existe';
        }
    }else{
        echo 'Error de envio';
    }
}
?>