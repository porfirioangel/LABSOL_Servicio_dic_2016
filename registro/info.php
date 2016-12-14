<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

$p_usuario=$_SESSION['p_usu'];
 $p_nombre=$_SESSION['p_nom'];
 $p_tipo=$_SESSION['p_tipo'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="asis"  )
{?>

<?php include("menu.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Inicio</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	  <style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";

</style>
<script type="text/javascript" src="view.js"></script>
	<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery-ui.js"></script>
	   <script type="text/javascript" src="js/jquery.form.min.js"></script>
	   
	

    <script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
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

<div style="margin-top:10%">
<img id="top" src="top.png" alt="">
	
			<h2 style="text-align: center";> <?php
 echo "Bienvenido:"." ".$_SESSION['p_nom'];

 
	?></h2>
			
	<img id="bottom" src="bottom.png" alt="">
		</div>
		


   <br>
        
         
			
          <br>
          <br>
          <br>  
           <br>
          <br>
          <br>  
           <br>
           <br>  
              <br>
          <br>
          <br>  
           <br>
          <br>
          <br>  
           <br>
           <br>  
      <img src="pie.jpg"  height="100%" width="100%">


<?php }else{
	
header("Location: denegado.php");
	}?>
