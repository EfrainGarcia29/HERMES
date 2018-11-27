function crearCobrador() {
    var data = {
    'nombres' : $('#nombre').val(),
    'apellidos': $('#apellido').val(),
    'usuario': $('#usuario').val(),
    'password': $('#password').val(),
    'email': $('#email').val(),
    'img': $('#img').val(),
    'idTipoUsuario': '2',
    'telefono' : $('#telefono').val(),
    'cedula' : $('#cedula').val(),
    'idEstado' : $('#selectEstados').val(),
    'idLocalidad' : $('#selectLocalidad').val()
    
  }
  
  console.log(data);
  
  $.ajax({
		type: "POST",
		url: '/controller/cobradoresController.php?createcobrador',
		data: {'data': data},
		dataType: 'json',
		success: function(data){
			if(data['status'] == 'success'){
			    location.href ="https://hermes-efra-garcia.c9users.io/view/cobradores.php";
			}
		}
	});
}

function getLocalidades(){
    $.ajax({
		type: "GET",
		url: '/controller/localidadesController.php?traerLocalidades',
		data: '',
		dataType: 'json',
		success: function(data){
		    //console.log(data);
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

function getEstados(){
    $.ajax({
		type: "GET",
		url: '/controller/estadosController.php?traerEstados',
		data: '',
		dataType: 'json',
		success: function(data){
		    //console.log(data);
			if (data!= null && data.length > 0) {
			    for (var i = 0; i < data.length; i++) {
			        $('#selectEstados').html($('#selectEstados').html()+
			            '<option value="'+data[i]['idEstado']+'">'+data[i]['estado']+'</option>'
			        );
			    }
			}
		}
	});
}


function editarCobrador(id) {
    var data = {
    'nombres' : $('#nombre').val(),
    'apellidos': $('#apellido').val(),
    'usuario': $('#usuario').val(),
    'password': $('#password').val(),
    'email': $('#email').val(),
    'img': $('#img').val(),
    'idTipoUsuario': '2',
    'telefono' : $('#telefono').val(),
    'cedula' : $('#cedula').val(),
    'idEstado' : $('#selectEstados').val(),
    'idLocalidad' : $('#selectLocalidad').val(),
    'id' : id
    
  }
  
  console.log(data);
  
  $.ajax({
		type: "POST",
		url: '/controller/cobradoresController.php?editarcobrador',
		data: {'data': data},
		dataType: 'json',
		success: function(data){
			if(data['status'] == 'success'){
			    location.href ="https://hermes-efra-garcia.c9users.io/view/cobradores.php";
			}
		}
	});
}
	
	
function getCobrador(id){
    $.ajax({
		type: "GET",
		url: '/controller/cobradoresController.php?getCobradores&id='+id,
		data: '',
		dataType: 'json',
		success: function(data){
			console.log(data);
			$('#nombre').val(data[0]['nombres']);
		    $('#apellido').val(data[0]['apellidos']);
		    $('#usuario').val(data[0]['usuario']);
		    $('#password').val(data[0]['password']);
		    $('#email').val(data[0]['email']);
		    $('#img').val(data[0]['img']);
		    $('#telefono').val(data[0]['telefono']);
		    $('#cedula').val(data[0]['cedula']);
		    $('#selectEstados').val(data[0]['idEstado']);
		    $('#selectLocalidad').val(data[0]['idLocalidad']);
		    $('#buttonsave').html('<button type="button" class="btn btn-primary" id="editarbtn" onclick="editarCobrador('+id+')">Guardar</button>');
		}
	});
}


function crearC(){
    $('#nombre').empty();
    $('#apellido').empty();
    $('#usuario').empty();
    $('#password').empty();
    $('#email').empty();
    $('#img').empty();
    $('#telefono').empty();
    $('#cedula').empty();
    $('#selectEstados').val('0');
    $('#selectLocalidad').val('0');
    $('#buttonsave').html('<button type="button" class="btn btn-primary" id="crearbtn" onclick="crearCobrador()">Guardar</button>');
}
	
function deleteCobrador(id){
    $('#btnEliminar'+id).prop('disabled', true);
    $('#nombrelocalidad').empty();
    $.ajax({
		type: "POST",
		url: '/controller/cobradoresController.php?deleteCobrador',
		data: {'id': id},
		dataType: 'json',
		success: function(data){
		    if(data['status'] ==  'success'){
		        $('#fila'+id).hide();
		    }
		}
	});
}