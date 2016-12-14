<?php session_start();
session_cache_limiter('nocache,private');
?>


<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>

<title>Registro</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
	<link rel="stylesheet" href="css/jquery-ui.css" />
<script type="text/javascript" src="view.js"></script>
	<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery-ui.js"></script>
	   <script type="text/javascript" src="js/jquery.form.min.js"></script>

</head>
<body id="main_body" >
	<img src="top.jpg"  height="100%" width="100%">

<table bgcolor="gray" style="width:100%;opacity: 0.9;
    filter: alpha(opacity=90)" > 
	<tr>
		 <td>

    <script type="text/javascript">
<!--




function index(){
window.location="info.php"; 

}
function msg(){
 alert('Ya estas dado de Alta')  
    

}
function no(){

 alert('No se ha completado tu registro, el Nombre de usuario esta en uso, escribe otro por favor')  
  window.location="registro.php";   


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



</script>

 
		
		
		
	
		<form id="frmreg" class="appnitro" name="frmreg" action="" onsubmit="" method="post">
					<div class="form_description">
			<h2>Registro LABSOL</h2>
			<p></p>
		</div>						
			<ul >
			
	
		<li id="li_3" >
		<label class="description" for="element_3">Nombre </label>
		<div>
			<input id="txtnom" name= "txtnom" maxlength="30" size="25" value=""/>
		</div> 
		</li>
		
		<li id="li_3" >
		<label class="description" for="element_3">Apellidos </label>
		<div>
		<input id="txtape" name= "txtape"  maxlength="70" size="25" value=""/>
		</div> 
		</li>
		
		
		<li id="li_3" >
		<label class="description" for="element_3">Institución </label>
		<div>
			<input id="txtinst" name="txtinst"  type="text" maxlength="254" size="25" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Email </label>
		<div>
			<input id="txtmail" name="txtmail"  type="text" maxlength="254" size="25" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Teléfono </label>
		<div>
			<input id="txttel" name="txttel"  type="text" maxlength="70" size="25" value=""/> 
		</div> 
		 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Nombre de usuario </label>
		<div>
			<input id="txtusu" name="txtusu"  type="text" maxlength="12"   size="25" value=""/> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Contraseña </label>
		<div>
			<input id="txtpass" name="txtpass"  type="password" maxlength="12"   size="25" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Confirmar contraseña </label>
		<div>
			<input id="txtpass1" name="txtpass1"  type="password" maxlength="12"   size="25" value=""/> 
		</div> 
		</li>		<li class="section_break">
			 <?php
 
@require_once('recaptchalib.php');
$publickey = "6LcnBg4TAAAAAJrecKp1vxotudvscotWn_DpmCp5";
$privatekey = "6LcnBg4TAAAAAJqBtNsAjCAjoPys55tUPTdChKyw";

$resp = null;
$error = null;
 
# are we submitting the page?
if ($_POST["action"]) {
	
  $resp = recaptcha_check_answer ($privatekey,
                                  $_SERVER["REMOTE_ADDR"],
                                  $_POST["recaptcha_challenge_field"],
                                  $_POST["recaptcha_response_field"]);
 
  if ($resp->is_valid) {
	
	
	 $_SESSION['sino23-que']="true";
///--------------------------
	include("classes/c_asistentes.php");
	
	$d = new asistente;
				
if ($_POST['action'] == "Guardar") {


	$nnq=$d->abrir_usu( $_POST['txtusu']);
	
   		if ($nnq==1){
		
			echo '<BODY onLoad="javascript:no()">';
			}else {
	
	
		$nn=$d->abrir( $_POST['txtnom'], $_POST['txtape'], $_POST['txtmail']);
		if ($nn==0){
				
$d->guardar(  $_POST['txtnom'],$_POST['txtape'], $_POST['txtmail'], $_POST['txtinst'],  $_POST['txtusu'],  $_POST['txtpass'],  $_POST['txttel']);

echo '<BODY onLoad="javascript:index()">'; 
		}else{echo '<BODY onLoad="javascript:msg()">'; 
		}
        
}

	
	
	
	
	}

	



	//	include("listo.php");
	//	 $nn=alu::ver();
		
	////	if ($nn==0){				
     //    alu::guardar();
	
	
 
  } else {
	  
     	echo "<div class='dd' align='center'>Lo sentimos, no se enviaron tus datos, por que no has logrado proporcionar el código de la imagen correcta! Inténtalo de nuevo ... </div>";
  }
}


echo '<div align="center">'.recaptcha_get_html($publickey, $error).'</div>';
?>
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

  
	   <h2> <a href="login.php" title="Iniciar Sesión" style="text-decoration:none; color:black" onmouseover="status='';return true" onclick="status='';return true" >Iniciar Sesión</a> </h2>
		

        
 <img src="pie.jpg"  height="100%" width="100%">  
   <br>

	</body>
</html>
