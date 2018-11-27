function getlocalidad(id){
	    $('#nombrelocalidad').empty();
	    $.ajax({
    		type: "GET",
    		url: '/controller/localidadesController.php?traerLocalidades&id='+id,
    		data: '',
    		dataType: 'json',
    		success: function(data){
    		    $('#nombrelocalidad').val(data[0]['nombre']);
    		    $('#buttonsave').html('<button type="button" class="btn btn-primary" id="editarbtn" onclick="editarLocalidad('+id+')">Guardar</button>');
    		}
    	});
	}
	
	function deletelocalidad(id){
	    $('#btnEliminar'+id).prop('disabled', true);
	    $('#nombrelocalidad').empty();
	    $.ajax({
    		type: "POST",
    		url: '/controller/localidadesController.php?deleteLocalidad',
    		data: {'id': id},
    		dataType: 'json',
    		success: function(data){
    		    if(data['status'] ==  'success'){
    		        $('#fila'+id).hide();
    		    }
    		}
    	});
	}
	
	function crear(){
	    $('#nombrelocalidad').empty();
	    $('#buttonsave').html('<button type="button" class="btn btn-primary" id="crearbtn" onclick="crearLocalidad()">Guardar</button>');
	}
	
	function crearLocalidad(){
	    var nombrelocalidad = $('#nombrelocalidad').val();
	    var data = {
	        'nombre' : nombrelocalidad
	    }
	    $.ajax({
    		type: "POST",
    		url: '/controller/localidadesController.php?createLocalidad',
    		data: {'data' : data},
    		dataType: 'json',
    		success: function(data){
    			if(data['status'] == 'success'){
    			    location.href ="https://hermes-efra-garcia.c9users.io/view/localidad.php";
    			}
    		}
    	});
	}
	
	function editarLocalidad(id){
	    $('#editarbtn').prop('disabled', true);
	    var nombrelocalidad = $('#nombrelocalidad').val();
	    var data = {
	        'nombre' : nombrelocalidad,
	        'id' : id
	    }
	    $.ajax({
    		type: "POST",
    		url: '/controller/localidadesController.php?editLocalidad',
    		data: {'data' : data},
    		dataType: 'json',
    		success: function(data){
    		    if(data['status'] == 'success'){
    		        $('#nom'+id).html(nombrelocalidad);
    		    }
    		    $('.modal').modal('hide');
    		    $('#editarbtn').prop('disabled', false);
    			console.log(data);
    		}
    	});
	}