<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/estilose.css">
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
	<header class="row">
		<div class="container hermes">
			<div class="col-md-12"><h1 class="title">Hermes - Working.net</h1></div>
		</div>
	</header>
	<div >
	  <a href="view/clientes.php">entrar</a>
		<section class="main row">
			<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
				<p>Cuando una puerta de felicidad se cierra, otra se abre. Pero con frecuencia miramos tanto a la puerta cerrada que no somos capaces de ver la puerta que se ha abierto frente a nosotros. - Hellen Keller</p>
			</article>
			<aside class="col-xs-12 col-sm-4 col-md-3 col-md-3 text-center">
				<form class="form-signin" method="POST" action="controller/usuarioController.php?login">
					<img class="mb-4" >
					<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
					<label for="inputEmail" class="sr-only">Correo</label>
					<input type="email" id="inputEmail" name="correo" class="form-control" placeholder="Correo" required autofocus>
					<label for="inputPassword" class="sr-only">Contraseña</label>
					<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required>
					<div class="checkbox mb-3">
						<label>
							<input type="checkbox" value="remember-me"> Recuerdame
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
					<div class="checkbox mb-3">
						<a href="/login/view/registrar.php">¿No tienes cuenta? Crear Cuenta</a>
					</div>
					<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
				</form>
			</aside> 
		</section>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
			</div>
		</div>	
	</div>
	<footer>
		<div class="container">
			<h3>Efrain David Garcia Fernandez</h3>
		</div>
	</footer>
</body>
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
</html>
