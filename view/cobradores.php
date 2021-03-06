<html lang="en">
<?php 

include('../dao/localidadDAO.php');
require_once('../dao/cobradoresDAO.php');
$objusuariosDao = new cobradoresDAO(); 
$usuarios = $objusuariosDao->allCobradores();
error_reporting(E_ALL ^ E_DEPRECATED);
    ob_start();
    session_start();
?>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Hermes</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
               Administrador 
           </a>
       </div>
       <ul class="nav">
        <li  class="nav-item active">
            <a class="nav-link" href="./cobradores.php">
                <i class="fas fa-users-cog"></i>
                <p>Cobradores</p>
            </a>
        </li>
        <li>
            <a class="nav-link" href="./clientes.php">
                <i class="fas fa-users"></i>
                <p>Clientes</p>
            </a>
        </li>
         <li>
            <a class="nav-link" href="./pagos.php">
                <i class="fas fa-hand-holding-usd"></i>
                <p>Pagos</p>
            </a>
        </li>
        <li>
            <a class="nav-link" href="./prestamos.php">
                <i class="fas fa-money-bill"></i>
                <p>Prestamos</p>
            </a>
        </li>
        <li>
            <a class="nav-link" href="./localidad.php">
                <i class="fas fa-globe-africa"></i>
                <p>Localidades</p>
            </a>
        </li>
    </ul>
</div>
</div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class=" container-fluid  ">
            <a class="navbar-brand" href="#pablo"> Cobradores </a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nc-icon nc-zoom-split"></i>
                            <span class="d-lg-block">&nbsp;Search</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <span class="no-icon"><?php echo $_SESSION["usuario"]["nombres"].' '.$_SESSION["usuario"]["apellidos"] ?></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="no-icon">Historial</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <span class="no-icon">Cerrar Sesion</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
     <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Cobradores</h4>
                        </div>
                        
<!-------------------------------------  Nuevo cobrador  ------------------------------------------------------------------------------------------------------------------------------->
                        <div class="card-header ">
                        <button class="btn btn-success" onclick="nuevoCobrador();"  data-toggle="modal" data-target="#modalCrearUsuario"> <i class="fas fa-plus"></i></button>
                        </div>
                         <div class="modal" id="modalCrearUsuario" tabindex="-1" role="dialog" aria-labelledby="modalCrearUsuarioLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <strong class="modal-title" id="modalCrearUsuarioLabel">Nuevo Cobrador</strong>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                          <div class="modal-body" >
                                             <section>
                                                  <div class="form-group col-md-12">
                          <label for="nombre">Nombres:</label>
                          <input class="form-control form-control-sm" type="text" placeholder="Nombres" id="nombre" REQUIRED name="nombre">
                        </div>
                        <div class="form-group col-md-12">
                         <label for="fN">Apellidos:</label>
                         <input class="form-control form-control-sm" type="text" placeholder="Apellidos" id="apellido" REQUIRED name="apellido">
                       </div>

                       <div class="form-group col-md-12">
                         <label for="usuario">Usuario:</label>
                         <input class="form-control form-control-sm" placeholder="Usuario" type="text" id="usuario" REQUIRED name="usuario">
                       </div>

                       <div class="form-group col-md-12">
                         <label for="contra">Password:</label>
                         <input class="form-control form-control-sm" placeholder="Contraseña" type="password" id="password" REQUIRED name="password">
                       </div>

                       <div class="form-group col-md-12">
                         <label for="email">Correo Electrónico:</label>
                         <input class="form-control form-control-sm" placeholder="Correo" type="email" id="email" REQUIRED name="email">
                       </div>

                       <div class="form-group col-md-12">
                         <label for="Nombre">Img:</label>
                         <input class="form-control form-control-sm" type="file" placeholder="img" id="img">
                       </div>
                        <div class="form-group col-md-12">
                         <label for="Nombre">Cedula:</label>
                         <input class="form-control form-control-sm" type="number" placeholder="cedula" id="cedula" REQUIRED name="cedula">
                       </div>
                       <div class="form-group col-md-12">
                         <label for="Nombre">Telefono:</label>
                         <input class="form-control form-control-sm" type="number" placeholder="telefono" id="telefono" REQUIRED name="telefono">
                       </div>
                       <div class="form-group col-md-12">
                            <label>Localidades</label>
                            <select class="form-control" id="selectLocalidad" name="tipoUser">
                                <option value="0">Seleccione una localidad</option>
                            </select>                          
                        </div>
                       <div class="form-group col-md-12">
                            <label>Estado</label>
                            <select class="form-control" id="selectEstados" name="tipoUser">
                                <option value="0">Seleccione estado</option>
                            </select>                          
                        </div>
                        </div>
                        <div class="modal-footer" id="buttonsave">
                             
                        </div>
                        </div>
                        </div>
                        </div>
                        
<!-----------------------------------------Fin cobrador  ------------------------------------------------------------------------------------------------------------------------------->
                  
                        
                        
                        <div class="card-body table-full-width table-responsive">
                           <table class="table responsive boarde">
                            <thead class="bg-info">
                                <tr style="color: #FFFFFF">
                                    <th scope="col">#</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Ruta</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                                <tbody>
                                   <?php foreach ($usuarios as $usuario): ?> 
                                <tr style="cursor: pointer;" onclick="console.log('efra')" id="fila<?php echo $usuario->getidUsuarios(); ?>">
                                <th scope="row" class="text_td"><?php echo $usuario->getidUsuarios(); ?></th>
                                <th scope="row" class="text_td"><?php echo $usuario->getnombres(); ?></th>
                                <th scope="row" class="text_td"><?php echo $usuario->getapellidos(); ?></th>
                                <th scope="row" class="text_td"><?php echo $usuario->getcedula(); ?></th>
                                <th scope="row" class="text_td"><?php echo $usuario->getemail(); ?></th>
                                <th scope="row" class="text_td"><?php echo $usuario->getusuario(); ?></th>
                                <th scope="row" class="text_td"><?php echo $usuario->getpassword(); ?></th>
                                <th scope="row" class="text_td"><?php echo $usuario->getestado(); ?></th>
                                <th scope="row" class="text_td"><?php echo $usuario->getidLocalidad(); ?></th>
                                <th scope="row" class="text_td">
                                            <button class="btn btn-info" data-toggle="modal" data-target="#modalCrearUsuario" onclick="getCobrador(<?php echo $usuario->getidUsuarios(); ?>)">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                        </th>
                                        <th scope="row">
                                            <button type="button" class="btn btn-danger" id="btnEliminar<?php  echo $usuario->getidUsuarios(); ?>"  onclick="deleteCobrador(<?php  echo $usuario->getidUsuarios();  ?>)">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </th>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul class="footer-menu">
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                </ul>
                <p class="copyright text-center">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </nav>
        </div>
    </footer>
</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<!-- AJAX! -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--   llamar localidades   -->
<!-- Clientes JS! -->
<script src="../assets/js/cobradores.js"></script>
<script src="../assets/js/localidad.js"></script>
<script>
    getLocalidades();
    getEstados();
</script>

</html>