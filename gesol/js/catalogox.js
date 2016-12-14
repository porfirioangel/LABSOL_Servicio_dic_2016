$(document).ready(catalogox);

function catalogox()
{
	//alert("Entrando");
	$('a.enlace').click(function(event){
		//event.preventDefault();
		var id = $(this).attr('id');

		//alert(id);

		$.ajax({
				async: true,
				type:"GET",
				dataType: 'html',
				contenType: "application/x-www-form-urlencoded",
				url:"datos/"+id,
				//data:"chat="+chat,
				//beforeSend:enviar,
				success: llegada,
				timeout: 10000,
				error: problemas
			});

			return false;

			function llegada (data)
			{
				$('#resultado').html(data);			
			}

			function problemas()
			{
				//alert('fallo');
				$("#resultado").html('Actualizar navegador o revisar codigo! ');
			}


	});

}