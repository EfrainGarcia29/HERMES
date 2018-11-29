function getClientes(){
    $.ajax({
		type: "GET",
		url: '/controller/clienteController.php?getClientes',
		data: '',
		dataType: 'json',
		success: function(data){
		    console.log(data);
			if (data!= null && data.length > 0) {
			    for (var i = 0; i < data.length; i++) {
			        $('#selectUsuario').html($('#selectUsuario').html()+
			            '<option value="'+data[i]['idUsuarios']+'">'+data[i]['nombres']+' '+data[i]['apellidos']+'</option>'
			        );
			    }
			}
		}
	});
}




function  crearPrestamo(){
    var data = {
        'valorPrestamo' : $('#valorPrestamo').val(),
        'tasasInteres' : $('#tasasInteres').val(),
        'cuotas' : $('#cuotas').val(),
        'usuario' : $('#selectUsuario').val(),
    }
    
    console.log('data', data);
    
    $.ajax({
		type: "POST",
		url: '/controller/prestamosController.php?createPrestamos',
		data: {'data' : data},
		dataType: 'json',
		success: function(data){
			if(data['status'] == 'success'){
			    location.href ="https://hermes-efra-garcia.c9users.io/view/prestamos.php";
			}
		}
	});
}



