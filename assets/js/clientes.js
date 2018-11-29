function crearCliente() {
		console.log('entre');
	var idLocalidad = $('#selectLocalidad').val();
    var data = {
    	
    'nombres' : $('#nombre').val(),
    'apellidos': $('#apellido').val(),
    'usuario': $('#usuario').val(),
    'password': $('#password').val(),
    'email': $('#email').val(),
    'img': $('#img').val(),
    'idTipoUsuario': '3',
    'direccion' : $('#direccion').val(),
    'cedula' : $('#cedula').val(),
    'telefono' : $('#telefono').val(),
    'idLocalidad' : idLocalidad
    
  }
  
  console.log(data);
  
  $.ajax({
		type: "POST",
		url: '/controller/clienteController.php?createcliente',
		data: {'data': data},
		dataType: 'json',
		success: function(data){
			console.log(data);
			location.href ="https://hermes-efra-garcia.c9users.io/view/clientes.php";
		}
	});
}
function getClientes(id){
    console.log('efra');
    $.ajax({
		type: "GET",
		url: '/controller/clienteController.php?getClientes&id='+id,
		data: '',
		dataType: 'json',
		success: function(data){
			console.log(data);
			$('#nombre').val(data[0]['nombres']);
		    $('#apellido').val(data[0]['apellidos']);
		    $('#usuario').val(data[0]['usuario']);
		    $('#password').val(data[0]['password']);
		    $('#email').val(data[0]['email']);
		    $('#img').val('');
		    $('#direccion').val(data[0]['direccion']);
		    $('#cedula').val(data[0]['cedula']);
		    $('#telefono').val(data[0]['telefono']);
		    $('#selectLocalidad').val(data[0]['idLocalidad']);
		    $('#buttonsave').html('<button type="button" class="btn btn-primary" id="editarbtn" onclick="editarCliente('+id+')">Guardar</button>');
		}
	});
}
function nuevoCliente(){
    $('#nombre').val('');
    $('#apellido').val('');
    $('#usuario').val(''); 
    $('#password').val('');
    $('#email').val('');
    $('#img').val('');
    $('#direccion').val('');
    $('#cedula').val('');
    $('#telefono').val('');
    $('#selectLocalidad').val('');
    $('#buttonsave').html('<button type="button" class="btn btn-primary" id="crearbtn" onclick="crearCliente()">Guardar</button>');
}
function getLocalidades(){
    $.ajax({
		type: "GET",
		url: '/controller/localidadesController.php?traerLocalidades',
		data: '',
		dataType: 'json',
		success: function(data){
		    console.log(data);
			if (data!= null && data.length > 0) {
			    for (var i = 0; i < data.length; i++) {
			        $('#selectLocalidad').html($('#selectLocalidad').html()+
			            '<option value="'+data[i]['idLocalidad']+'">'+data[i]['nombre']+'</option>'
			        );
			    }
			}
		}
	});
}
function editarCliente(id) {
	var idLocalidad = $('#selectLocalidad').val();
	console.log('idLocalidad', idLocalidad)
    var data = {
    'nombres' : $('#nombre').val(),
    'apellidos': $('#apellido').val(),
    'usuario': $('#usuario').val(),
    'password': $('#password').val(),
    'email': $('#email').val(),
    'img': $('#img').val(),
    'direccion': $('#direccion').val(),
    'idTipoUsuario': '2',
    'cedula' : $('#cedula').val(),
    'telefono' : $('#telefono').val(),
    'idLocalidad' : idLocalidad,
    'id' : id
    
  }
  
  console.log(data);
  
  $.ajax({
		type: "POST",
		url: '/controller/clienteController.php?editarclientes',
		data: {'data': data},
		dataType: 'json',
		success: function(data){
			if(data['status'] == 'success'){
			    location.href ="https://hermes-efra-garcia.c9users.io/view/clientes.php";
			}
		}
	});
}
function deleteClientes(id){
    $('#btnEliminar'+id).prop('disabled', true);
    $('#nombrelocalidad').val('');
    $.ajax({
		type: "POST",
		url: '/controller/clienteController.php?deleteClientes',
		data: {'id': id},
		dataType: 'json',
		success: function(data){
		    if(data['status'] ==  'success'){
		        $('#fila'+id).hide
		        location.href ="https://hermes-efra-garcia.c9users.io/view/clientes.php";
		    }
		}
	});
}