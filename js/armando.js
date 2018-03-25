


$(document).ready(function(){

	var error = function(texto){
		$('#error').html(texto);  
			$('#error').css({ visibility: 'visible'  }); 
	}

	var marcar = function(id){
		$(id).css({ 'box-shadow': '.1em 1em 3em black'})
	}



	$('.menu').click(function(){

		 var x = document.getElementById('menu');

		
		if(x.style.left != '3.9em') {
			$('.menu-hidden').css({ visibility: 'visible' })
			$('.menu').css({ left: '3.9em' })
			
		} 

		else{

			$('.menu-hidden').css({ 

				transition: '0s',
				visibility: 'hidden' 

			})
			$('.menu').css({ left: '1%' })
			

		} 
		

	});


		$('.volver').click(function(){ 
			if( confirm('Seguro que deseas Salir?') == true)  window.history.back(-1); 

		});

	$('input[name=sesion]').click(function(){
		
		if( $('input[name=usuario]').val() == 'ARMANDO' ){
			if( $('input[name=password]').val() == '123') window.location.href= '?url=1'; 
			else {

				error('CONTRASEÑA INVALIDA');
				marcar('input[name=password]');
			} 

		}
		else  {
		error('USUARIO INVALIDO');
		marcar('input[name=usuario]');
		} 

		

	}); 

	$('a').click(function(){

		$('.menu-hidden').css({ 
				transition: '0s',
				visibility: 'hidden' 
			})
		
		$('.menu').css({ left: '1%' })


	
	});

	$('.tabla').hide();

	$('#buscar').click(function(){

		if(  $('input').val() == 'ARMANDO' || $('input').val() == '26059573' 
				|| $('input').val() == 'CERVEZA' || $('input').val() == 'CL001') $('.tabla').show();


		else if($('input').val() != '')  error('NO SE ENCUENTRA REGISTRADO EN LA BASE DE DATOS'); 
		else {

			error('CAMPO DE BUSQUEDA VACIO'); 
		}

	});


	$('input[name=registrar]').click(function(){
		
		if( $('input').val() == '' ) error('Faltan Rellenar Campos Obligatorios');
		else {

			$('.formulario').html(' ');
			error("Registrado Exitosamente");
		}	
			 

	});

	$('#eliminar').click(function(){
		error('NO DISPONIBLE'); 
	});

	$('#mision').click(function(){

		$('.efecto').load('modelo/php/mision.html'); 
	});

	$('#vision').click(function(){

		$('.efecto').load('modelo/php/vision.html'); 
	});

	$('#objetivo').click(function(){

		$('.efecto').load('modelo/php/objetivo.html'); 
	});

	$('#historia').click(function(){

		$('.efecto').load('modelo/php/historia.html'); 
	});



});

