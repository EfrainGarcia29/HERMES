function crearCliente() {
    var data = {
    'nombres' : $('#nombre').val(),
    'apellidos': $('#apellido').val(),
    'usuario': $('#usuario').val(),
    'password': $('#password').val(),
    'email': $('#email').val(),
    'img': $('#img').val(),
    'idTipoUsuario': '3',
    'direccion' : $('#direccion').val(),
    'telefono' : $('#telefono').val(),
    'cedula' : $('#cedula').val(),
    'idLocalidad' : $('#idLocalidad').val()
    
  }
  
  console.log(data);
  
  $.ajax({
		type: "POST",
		url: '/controller/clienteController.php?createcliente',
		data: {'data': data},
		dataType: 'json',
		success: function(data){
			console.log(data);
		}
	});
}