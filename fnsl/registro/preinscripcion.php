<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

$p_usuario=$_SESSION['p_usu'];
 $p_nombre=$_SESSION['p_nom'];
 $p_tipo=$_SESSION['p_tipo'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="asis"  )
{
	
	
include("classes/c_asistentes.php");
	
	$d = new asistente;
				
				
				$r=$d->abrir_mat($p_usuario);
		
if ($_POST['action'] == "Inscribir") {
   		
				
		$nn=$d->vertaller($_POST['cbo_taller'],$p_usuario);
		
		if ($nn==0){
			
		
$re=$d->guardartaller($_POST['cbo_taller'],$p_usuario) ;

if ($re==1){
	echo '<BODY onLoad="javascript:msg3()">';
		}
		if ($re==0){
	echo '<BODY onLoad="javascript:msg1()">';
		}
	}else{echo '<BODY onLoad="javascript:msg()">'; }
        
  
	
	}



			
				
				
				
				?>

<?php include("menu.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pre-Registro</title>
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
				 "sDom": '<f>rt<lip><"clear">',
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
 function showtaller(str)
 {
 if (str=="")
   {
   document.getElementById("txtHint").innerHTML="";
   return;
   } 
 if (window.XMLHttpRequest)
   {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
   }
 else
   {// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
 xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
     document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
     }
   }
 xmlhttp.open("GET","tal.php?q="+str,true);
 xmlhttp.send();
 }
 </script>


    <script type="text/javascript">
<!--





function msg(){
 alert('Ya estas pre-registrado o No puedes tomar otro Curso a la misa hora y dia')   

}
function msg1(){
 alert('No hay Cupo en el Curso')   

}


function msg3(){
 alert('Pre-registrado Correctamente')   
window.location="asistente.php"; 

}


$(document).ready(function() { 
		

	 $("#button").click(function (){
	
		var er_string = /^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/ 
		var er_string2 = /^([0-9]|[a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/    
		var er_pass = /^([0-9]|[a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/    
		var er_numbers = /^([0-9])+$/            
		var er_email = /^(.+\@.+\..+)$/   
		var er_cbo =  /^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s)+$/   
		var x 
			 $(".error").remove();
			
 	if( $("#cbo_taller").val() == "" ){
            $("#cbo_taller").focus().after("<span class='error'>Selecciona Taller</span>");
            return false;
        }			
        
        
		
				
			 		
				
	
	
  });


$("#cbo_taller").change(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });	
    

	


}); 




//-->
</script>

<table bgcolor="gray" style="width:100%;opacity: 0.9;
    filter: alpha(opacity=90)" > 
	<tr>
		 <td>

	<!--<div id="form_container"> -->
		
		<!--<h1><a>Cuenta</a></h1>-->
		<div align="center">
		<form id="frmreg" class="appnitro" name="frmreg" action="" onsubmit="" method="post">
					<div class="form_description">
			<h2 >Pre-registro</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_7" >
		<label class="description" for="element_7">Nombre Completo</label>
		
			<input id="txtnom" name= "txtnom"  maxlength="30" size="30" readonly="readonly" value="<?php echo $r['nombre']." ".$r['apellidos']; ?>" </>
			
		
		
		
		
		</li>	
		
		<li id="li_3" >
		<label class="description" for="element_3">Institución </label>
		<div>
			<input id="txtinst" name="txtinst"  readonly="readonly" type="text" maxlength="254" size="30" value="<?php echo $r['institucion']; ?>"/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Email </label>
		<div>
			<input id="txtmail" name="txtmail"  readonly="readonly" type="text" maxlength="254" size="30" value="<?php echo $r['email']; ?>"/> 
		</div> 
		</li>		<li id="li_5" >
		<label for="element_5">Selecciona el Taller:  </label>
		<div>
				
		<?php 
 	  //include ("conecta.php");
				//	$link=conectarse();
					$qi=mysql_query("select * from taller order by taller.id_taller  asc"); ?>
           <select name="cbo_taller" id="cbo_taller" onChange="showtaller(this.value)">
          <option selected="selected"></option>
           
          <?php 
	
            while ($r=mysql_fetch_array($qi))
			  {echo"<option value='".$r['id_taller']."'>".$r['nombre']."</option>";}
		 
          ?>
          </select>
		</div> 
		 <li class="section_break">
					</li>
		<div id="txtHint"></div>
        
     	  
		
			<li class="buttons">
						<input type="submit" name="action" id="button" value="Inscribir" />
            
        
			
		</li>
			</ul>
		</form>	    
   
    
    </div>
   
   		
<!--	</div> -->

		</td>
  </tr>
		</table>
		
		 <div id="cuadro_info" align="center" style="width:100%;" >
<div id="container" class="ex_highlight_row">
<div id="demo">
<div align="center"><h2>Talleres</h2></div>
<table  cellpadding="0" cellspacing="0" border="0" width="100%" class="display" id="example1">
 <thead>
    <tr>
	   <td width="3%"><div align="center"><b>  Taller</b> </div></td>
     <td width="3%"><div align="center"><b>Coordinador</b> </div></td>    
       <td width="5%"><div align="center"><b>Hora</b> </div></td>    
         <td width="5%"><div align="center"><b>Fecha</b> </div></td>  
         <td width="5%"><div align="center"><b>Lugar</b> </div></td>   
                
  </tr>
  </thead>
  <tbody>
  <?php

   $consulta_obras = mysql_query("SELECT * from taller order by taller.id_taller asc");
  
	
	
    while ($resobras = mysql_fetch_assoc($consulta_obras)) {
	   
	  
	  

	
		
  ?>
 <tr >
   <td align="center"><?php echo $resobras['nombre']; ?></td> 
    <td  align="center"><?php echo $resobras['coordinador']; ?></td>    
     <td  align="center"><?php echo $resobras['hora']; ?></td>    
 <td  align="center"><?php echo $resobras['fecha']; ?></td>    
  	 <td  align="center"><?php echo $resobras['lugar']; ?></td>    
    
	
 </tr>  
    <?php
    

    
    
    
     } ?>
    </tbody>
    <tfoot>
      <tr>
	   <td width="3%"><div align="center"> Taller</div></td> 
      <td width="3%"><div align="center">Coordinador</div></td>   
       <td width="5%"><div align="center">Hora</div></td>    
         <td width="5%"><div align="center">Fecha</div></td>     
          <td width="5%"><div align="center">Lugar</div></td> 
            
 
  </tr>
  </tfoot>
  </table>
  </div></div>
  
 </div> 
  
  
		

   <br>
        
         
			
            
      

   <img src="pie.jpg"  height="100%" width="100%">
    



  

  
   
<!-- This document saved from http://cisol.org.mx/ -->
<?php }else{
	
	header("Location: denegado.php");
	}?>
