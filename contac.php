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
	<link rel="stylesheet" href="assets/css/estilosC.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/img-01.jpg');" >
			
				<form action="" class="form">
					<div class="form-header">
						<h1 class="form-title">S<span>olicitud</span></h1>
					</div>

					<label for="nombre" class="form-label">Nombres:</label>
					<input required type="text" id="nombre" class="form-input" placeholder="Escriba su nombre">

					<label for="tel" class="form-label">Celular:</label>
					<input required type="text" onkeypress='return event.charCode >= 48, event.charCode <= 57' id="tel" class="form-input" placeholder="Escriba su número de celular">

					<label for="correo" class="form-label">E-mail:</label>
					<input required type="email" id="correo" class="form-input" placeholder="Escriba su correo">

					<input required type="submit"  class="btn-submit" value="Enviar solicitud"> 
						<a href="index.php" class="txt1">
							Regresar
						</a>
					
				</form>
			
		</div>
	</div>
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/select2/select2.min.js"></script>
</body>
</html>