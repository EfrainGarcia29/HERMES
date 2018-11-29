<!DOCTYPE html>
<html lang="en">
<?php 

require_once('../dao/prestamosDAO.php');
$objprestamoDao = new prestamosDAO(); 
$prestamos = $objprestamoDao->allprestamos();
error_reporting(E_ALL ^ E_DEPRECATED);
    ob_start();
    session_start();
?>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../assets/css/stylo.css">
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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                     Administrador 
                 </a>
             </div>
             <ul class="nav">
                <li>
                    <a class="nav-link" href="./cobradores.php ">
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
            <li class="nav-item active">
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
            <a class="navbar-brand" href="#pablo">Prestamos</a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="nc-icon nc-palette"></i>
                            <span class="d-lg-none">Dashboard</span>
                        </a>
                    </li>
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
                        <a class="nav-link" href="index.php">
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
                            <h4 class="card-title">Prestamos</h4>
                        </div>
                        <div class="card-header ">
                            <button class="btn btn-success" data-toggle="modal" data-target="#modalCrearPrestamo"> <i class="fas fa-plus"></i></button>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                           <table class="table responsive boarde">
                            <thead class="bg-info">
                                <tr style="color: #FFFFFF">
                                    <th scope="col">#</th>
                                    <th scope="col">Prestamos</th>
                                    <th scope="col">VaLor Por Pagar</th>
                                    <th scope="col">Tasa de Interes</th>
                                    <th scope="col">Cuotas</th>
                                    <th scope="col">Fecha de Inicio</th>
                                    <th scope="col">Fecha Final</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Estado</th>
                                    <!--<th scope="col">Editar</th>-->
                                    
                                </tr>
                                <tbody>
                                    <?php foreach ($prestamos as $pre): ?> 
                                        <tr style="cursor: pointer;" onclick="console.log('efra')" id="fila<?php echo $pre->getidPrestamos(); ?>">
                                        <th scope="row"><?php echo $pre->getidPrestamos(); ?></th>
                                        <th scope="row"><?php echo $pre->getprestamo(); ?></th>
                                        <th scope="row"><?php echo $pre->getvalorPorPagar(); ?></th>
                                        <th scope="row"><?php echo $pre->gettasaInteres(); ?></th>
                                        <th scope="row"><?php echo $pre->getcuota(); ?></th>
                                        <th scope="row"><?php echo $pre->getfechaInicio(); ?></th>
                                        <th scope="row"><?php echo $pre->getfechaFinal(); ?></th>
                                        <th scope="row"><?php echo $pre->getidUsuarios(); ?></th>
                                        <th scope="row"><?php echo $pre->getidEstadosPrestamos(); ?></th>
                                        <!--<th scope="row">-->
                                        <!--    <button class="btn btn-info">-->
                                        <!--        <i class="far fa-edit"></i>-->
                                        <!--    </button>-->
                                        <!--</th>-->
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

<!-------------------------------------------Nuevo Prestamo--------------------------------------------------------------------------------------------------------->
<div class="modal" id="modalCrearPrestamo" tabindex="-1" role="dialog" aria-labelledby="modalCrearUsuarioLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <strong class="modal-title" id="modalCrearUsuarioLabel">Crear Prestamo</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" action="../../control/accion/act_insertarUsuario.php">
                  <div class="modal-body" >
                     <section>
                          <div class="form-group col-md-12">
                             <label for="valorPrestamo">Valor Prestamo:</label>
                             <input class="form-control" min="1" type="number" id="valorPrestamo"/>
                          </div>
                     </section>
                     <section>
                          <div class="form-group col-md-12">
                             <label for="tasasInteres">Interes:</label>
                             <input class="form-control" max-length="2" type="number" id="tasasInteres"/>
                          </div>
                     </section>
                     <section>
                          <div class="form-group col-md-12">
                             <label for="cuotas">Cuotas:</label>
                             <input class="form-control" max-length="2" type="number" id="cuotas"/>
                          </div>
                     </section>
                     <section>
                         <div class="form-group col-md-12">
                            <label>Usuario</label>
                            <select class="form-control" id="selectUsuario">
                                <option value="0">Seleccione un cliente</option>
                            </select>
                         </div>
                      </section>
                  </div>
                  <section>
                    <div class="modal-footer" id="buttonsave">
                        <button type="button" class="btn btn-primary" id="crearbtn" onclick="crearPrestamo()">Guardar</button>
                    </div>
                  </section>
              </form>
            </div>
          </div>
        </div>
<!---------------------------------------  Fin prestamo-------------------------------------------------------------------------------------------------------------->
                        

</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<!--   llamar prestamos   -->
<script src="../assets/js/prestamos.js"></script>
<script type="text/javascript">
    getClientes();
</script>
</html>