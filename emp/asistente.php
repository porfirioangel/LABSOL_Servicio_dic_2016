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
				
				
if ($_POST['action'] == "Guardar") {
   		
	
		$nn=$d->abrir( $_POST['txtnom'], $_POST['txtape'], $_POST['txtmail']);
		if ($nn==1){
				
$d->modificar($_POST['txtpass']);

echo '<BODY onLoad="javascript:index()">'; 
		}else{echo '<BODY onLoad="javascript:msg()">'; 
		}
        
}



?>
 


<?php include("menu.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cuenta</title>
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




function index(){
	alert('Se modifico tu contraseña correctamente')   
window.location="asistente.php"; 

}
function msg(){
 alert('Estas dado de Baja')   

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
			
 	if( $("#txtnom").val() == "" ){
            $("#txtnom").focus().after("<span class='error'>Ingrese Nombre</span>");
            return false;
        }			
        
        
        	   var nom = document.getElementById('txtnom').value;
		 if(!er_string.test(nom)) {    
    	 $("#txtnom").focus().after("<span class='error'>Nombre no v&aacute;lido</span>");
		 return false   
    		}
        		
 	if( $("#txtape").val() == "" ){
            $("#txtape").focus().after("<span class='error'>Ingrese Apellidos</span>");
            return false;
        }		
        
           var nom = document.getElementById('txtape').value;
		 if(!er_string.test(nom)) {    
    	 $("#txtape").focus().after("<span class='error'>Apellidos no v&aacute;lido</span>");
		 return false   
    		}
        
        	if( $("#txtinst").val() == "" ){
            $("#txtinst").focus().after("<span class='error'>Ingrese Institución</span>");
            return false;
        }		
        
        
          var nom = document.getElementById('txtinst').value;
		 if(!er_string2.test(nom)) {    
    	 $("#txtinst").focus().after("<span class='error'>Institución no v&aacute;lido</span>");
		 return false   
    		}
    		
          	if( $("#txtmail").val() == "" ){
            $("#txtmail").focus().after("<span class='error'>Ingrese Email</span>");
            return false;
        }			
        
             var nom = document.getElementById('txtmail').value;
		 if(!er_email.test(nom)) {    
    	 $("#txtmail").focus().after("<span class='error'>Email no v&aacute;lido</span>");
		 return false   
    		}
         
        
         	if( $("#txtusu").val() == "" ){
            $("#txtusu").focus().after("<span class='error'>Ingrese Usuario</span>");
            return false;
        }		
         var nom = document.getElementById('txtusu').value;
		 if(!er_string2.test(nom)) {    
    	 $("#txtusu").focus().after("<span class='error'>Usuario no v&aacute;lido</span>");
		 return false   
    		}		
			 		
			 		
			if( $("#txtpass").val() == "" ){
            $("#txtpass").focus().after("<span class='error'>Ingrese Contraseña</span>");
            return false;
        }	
        
        
        	 		
			if( $("#recaptcha_response_field").val() == "" ){
            $("#recaptcha_response_field").focus().after("<span class='error'>Codigo de Imagen no válido.</span>");
            return false;
        }	
        
        
        	if( $("#txtpass").val() !=  $("#txtpass1").val() ){
            $("#txtpass1").focus().after("<span class='error'>No es la misma Contraseña.</span>");
            return false;
        }	
		
				
			 		
				
	
	
  });


$("#txtnom").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });	
    
    $("#txtape").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
    
    $("#txtinst").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });		


    
    $("#txtusu").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });	
    
    $("#txtpass").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });	
    
    $("#txtpass1").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });	
    
      
    $("#recaptcha_response_field").keyup(function(){
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
	
	
	<!--<div id="form_container">
		
		<h1><a>Cuenta</a></h1>--><div align="center">
		<form id="frmreg" class="appnitro" name="frmreg" action="" onsubmit="" method="post">
					<div class="form_description">
			<h2>Cuenta</h2>
			<p></p>
		</div>						
			<ul >
			
					
		<li id="li_3" >
		<label class="description" for="element_3">Nombre </label>
		<div>
				<input id="txtnom" name= "txtnom"  maxlength="30" size="30" readonly="readonly" value="<?php echo $r['nombre']; ?>" </>
		</div> 
		</li>	
		
		<li id="li_3" >
		<label class="description" for="element_3">Apellidos </label>
		<div>
				<input id="txtape" name= "txtape"  maxlength="70" readonly="readonly" size="30" value="<?php echo $r['apellidos']; ?>"/>
		</div> 
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
		<label class="description" for="element_5">Teléfono </label>
		<div>
			<input id="txttel" name="txttel"  readonly="readonly" type="text" maxlength="70" size="30" value="<?php echo $r['telefono']; ?>"/> 
		</div> 
		 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Nombre de usuario </label>
		<div>
			<input id="txtusu" name="txtusu"  readonly="readonly" type="text" maxlength="12"   size="30" value="<?php echo $r['login']; ?>"/> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Contraseña </label>
		<div>
			<input id="txtpass" name="txtpass"   type="password" maxlength="12"   size="30" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Confirmar contraseña </label>
		<div>
			<input id="txtpass1" name="txtpass1"  type="password" maxlength="12"   size="30" value=""/> 
		</div> 
		</li>	
		
			<li class="buttons">
						<input type="submit" name="action" id="button" value="Guardar" />
            
          <input type="reset" name="button2" id="button2" value="Limpiar" />
			
		</li>
			</ul>
		</form>	    
   
    
    
   
   		</div>
	<!--</div>-->
	
		</td>
  </tr>
		</table>
		
		<!--
		 <div id="cuadro_info" style="width:100%" >
<div id="container" class="ex_highlight_row">
<div id="demo">
<div align="center"><h2>Registrado a los Talleres</h2></div>
<table width="100%" cellpadding="0" cellspacing="0" width="100%" border="0" class="display" id="example1">
 <thead>
    <tr>
	   <td width="3%"><div align="center"><b>Hora</b> </div></td>
     <td width="3%"><div align="center"><b>Fecha</b> </div></td>    
       <td width="5%"><div align="center"><b> Taller</b> </div></td>    
         <td width="5%"><div align="center"><b>Coordinador</b> </div></td>  
         <td width="5%"><div align="center"><b>Lugar</b> </div></td>   
             
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
  
	
 </tr>  
    <?php
    
}
    
    
    
     } ?>
    </tbody>
    <tfoot>
      <tr>
	   <td width="3%"><div align="center">Hora</div></td> 
      <td width="3%"><div align="center">Fecha</div></td>   
       <td width="5%"><div align="center"> Taller</div></td>    
         <td width="5%"><div align="center">Coordinador</div></td>     
          <td width="5%"><div align="center">Lugar</div></td> 
             
 
  </tr>
  </tfoot>
  </table>
  </div></div>
  
 </div> 
  -->
  
		

   <br>
        
         
			
            
      

 
    
  
   <img src="pie.jpg"  height="100%" width="100%">  
    
  
<?php }else{
	
	header("Location: denegado.php");
	}?>