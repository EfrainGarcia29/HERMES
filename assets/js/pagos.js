	function crear(){
	    $('#nombrelocalidad').empty();
	    $('#buttonsave').html('<button type="button" class="btn btn-primary" id="crearbtn" onclick="crearLocalidad()">Guardar</button>');
	}
	
	function crearPagos(){
	    var prestamo = $('#selectPrestamo').val();
		//console.log(prestamo,'dataPrestamo',dataPrestamo)
		if (prestamo == 0 || prestamo === undefined) {
			$('#cliente').val('');
			$('#valorPrestamo').val('');
			$('#tasasInteres').val('');
			$('#cuotas').val('');
		}else{
			var newdataPrestamo =  dataPrestamo.filter(function(valor) {
		        return valor.idPrestamos ==  prestamo;
		    });
			console.log('newdataPrestamo', newdataPrestamo);
			var data = {

	            'valorPago' : $('#valorPorPagar').val(),
	            'idPrestamos' : newdataPrestamo[0]['idPrestamos'],
	            'idUsuarios' : newdataPrestamo[0]['idUsuarios']
	    
	  
		    }
		    console.log('data', data);
		    $.ajax({
	    		type: "POST",
	    		url: '/controller/pagosController.php?createPagos',
	    		data: {'data' : data},
	    		dataType: 'json',
	    		success: function(data){
	    			if(data['status'] == 'success'){
	    			    location.href ="https://hermes-efra-garcia.c9users.io/view/pagos.php";
	    			}
	    		}
	    	});
		}
	}
	
	
	var dataPrestamo;
	function getPrestamos(){
	    $.ajax({
			type: "GET",
			url: '/controller/prestamosController.php?getPrestamos',
			data: '',
			dataType: 'json',
			success: function(data){
				console.log(data);
				dataPrestamo = [];
				dataPrestamo = data;
				if (data!= null && data.length > 0) {
				    for (var i = 0; i < data.length; i++) {
				        $('#selectPrestamo').html($('#selectPrestamo').html()+
				            '<option value="'+data[i]['idPrestamos']+'">'+data[i]['idPrestamos']+'</option>'
				        );
				    }
				}
			}
		});
	}
	
	
	function cargarDataP(){
		var prestamo = $('#selectPrestamo').val();
		//console.log(prestamo,'dataPrestamo',dataPrestamo)
		if (prestamo == 0 || prestamo === undefined) {
			$('#cliente').val('');
			$('#valorPrestamo').val('');
			$('#tasasInteres').val('');
			$('#cuotas').val('');
		}else{
			var newdataPrestamo =  dataPrestamo.filter(function(valor) {
		        return valor.idPrestamos ==  prestamo;
		    });
			console.log('newdataPrestamo', newdataPrestamo);
			$('#cliente').val(newdataPrestamo[0]['nombres']+' '+newdataPrestamo[0]['apellidos']);
			$('#valorPrestamo').val(newdataPrestamo[0]['valorPorPagar']);
			$('#tasasInteres').val(newdataPrestamo[0]['tasaInteres']+'%');
			$('#cuotas').val(newdataPrestamo[0]['cuota']);
		}
			
	}