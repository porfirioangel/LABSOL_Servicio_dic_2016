<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

$p_usuario=$_SESSION['p_usu'];
 $p_nombre=$_SESSION['p_nom'];
 $p_tipo=$_SESSION['p_tipo'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="asis"  )
{



?>
 


<?php include("menu.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registro</title>
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
    
   


    <script type="text/javascript">
<!--




//-->
</script>


	
	
		
		
		 <div id="cuadro_info" >
<div id="container" class="ex_highlight_row">
<div id="demo">
<div align="center"><h2>Registrado a los Talleres</h2></div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="display" id="example1">
 <thead>
    <tr>
	   <td width="3%"><div align="center"><b>Hora</b> </div></td>
     <td width="3%"><div align="center"><b>Fecha</b> </div></td>    
       <td width="5%"><div align="center"><b>Curso</b> </div></td>    
         <td width="5%"><div align="center"><b>Coordinador</b> </div></td>  
         <td width="5%"><div align="center"><b>Lugar</b> </div></td>   
            <td width="5%"><div align="center"><b>Quitar</b> </div></td>    
  </tr>
  </thead>
  <tbody>
  <?php

   $consulta_obras = mysql_query("select * from asistentes inner join expediente on asistentes.matricula=expediente.matricula where expediente.matricula=".$p_usuario." and asistentes.activo=1");
  
	
	
    while ($resobras = mysql_fetch_assoc($consulta_obras)) {
	   
	  
	  $desp=@mysql_query("select * from taller where id_taller=".$resobras['id_taller']."");
		$despp = @mysql_fetch_array($desp); 
		 
		if ($despp['nombre']!=""){
	
		
  ?>
 <tr >
   <td align="center"><?php echo $despp['hora']; ?></td> 
    <td  align="center"><?php echo $despp['fecha']; ?></td>    
     <td  align="center"><?php echo $despp['nombre']; ?></td>    
 <td  align="center"><?php echo $despp['coordinador']; ?></td>    
  	 <td  align="center"><?php echo $despp['lugar']; ?></td>    
    <td align="center"><div align="center">
     <a href="print.php?id=<?php echo $resobras['id_ins']; ?>" >
	
	<img src="images/delete_2.png" width="24" height="24" title="Quitar">
	
	</a></div></td>
	
 </tr>  
    <?php
    
}
    
    
    
     } ?>
    </tbody>
    <tfoot>
      <tr>
	   <td width="3%"><div align="center">Hora</div></td> 
      <td width="3%"><div align="center">Fecha</div></td>   
       <td width="5%"><div align="center">Curso</div></td>    
         <td width="5%"><div align="center">Coordinador</div></td>     
          <td width="5%"><div align="center">Lugar</div></td> 
            <td width="5%"><div align="center">Quitar</div></td>     
 
  </tr>
  </tfoot>
  </table>
  </div></div>
  
 </div> 
  
  
		

   <br>
        
         
			
            
      

 
    
    
    
  
<?php }else{
	
	header("Location: denegado.php");
	}?>
