<?php include("registro/menu1.php"); 
	require_once ('Mobile_Detect.php');
	$detect = new Mobile_Detect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Programa</title>
<link rel="stylesheet" type="text/css" href="registro/view.css" media="all">
	<link rel="stylesheet" href="registro/css/jquery-ui.css" />
	  <style type="text/css" title="currentStyle">
			@import "registro/media/css/demo_page.css";
			@import "registro/media/css/demo_table.css";

</style>
<script type="text/javascript" src="registro/view.js"></script>
	<script type="text/javascript" language="javascript" src="registro/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="registro/js/jquery-ui.js"></script>
	   <script type="text/javascript" src="registro/js/jquery.form.min.js"></script>
	   
	

    <script type="text/javascript" language="javascript" src="registro/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example1').dataTable({
				 "sDom": '"clear"&gt;',
		"iDisplayLength": -1,
				
				  "iDisplayLength": -1,
 
        "oLanguage": {
           "sLengthMenu": 'Mostrar <select>'+
            '<option value="10">10</option>'+
            '<option value="25">25</option>'+
			'<option value="50">50</option>'+
			'<option value="100">100</option>'+
            '<option value="-1">Todos</option>'+
            '</select> registros por pagina',
            "sZeroRecords": "No se encontro nada",
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 a 0 de 0 registros",
            "sSearch": "Buscar",
            "sInfoFiltered": "(filtrado de _MAX_ registros totales)"
            
        },
			"bSort": false
    });
			} );
</script>

</head>
<body id="main_body" >

<table bgcolor="gray" style="width:100%;opacity: 0.9;
    filter: alpha(opacity=90)" > 
	<tr>
		 <td>


		
	
		<form id="frmreg" class="appnitro" name="frmreg" action="" onsubmit="" method="post">
					<div class="form_description">
			<h2 align="center" style="color:white;font-weight: bold;">Programa del evento</h2>
			<p></p>
			
		</div>						
			<div align="center">
				<?php


if ( $detect->isMobile() or  $detect->isTablet() or $detect->isAndroidOS() or $detect->isiOS() ){
	
	echo '<img src="fnsl2015.png" height="100%" width="100%">';
echo '<img src="fnsl20151.png" height="100%" width="100%">';
	}else{
?>
<iframe src="registro/programa.pdf" style="width:100%; height:400px;" frameborder="0"></iframe>

	
<?php } ?>
 </div>
		</form>	    
   
    
    
   
   		
	</div>
	<!--</div>-->
	
		</td>
  </tr>
  

		</table>
		
		
 <br>
        
 <img src="registro/pie.jpg"  height="100%" width="100%">  
   <br>
        
         
