<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
    ob_start();
    session_start();
    $_SESSION['usuario'] = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hermes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/images/icons/b.png"/>
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="form-signin" method ="POST" action="controller/usuariosController.php?login">
					<div class="login100-form-avatar">
						<img src="assets/images/avatar-01.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Bienvenidos a Hermes
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Se requiere nombre de usuario">
						<input class="input100" type="text" placeholder="Usuario" id="email" name="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Se requiere contraseña">
						<input class="input100" type="password" placeholder="Contraseña" id="password" name="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" id="btIn" type="submit">
							Ingresar
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							¿Olvidó su nombre de usuario / contraseña?
						</a>
						<a href="contac.php" class="txt1">
							Solicitar prestamo
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	
</body>
</html>