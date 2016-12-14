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

	    <script type="text/javascript">
<!--





function msg(){
 alert('Se envio un Correo con tu Información')  
 window.location="login.php"; 
    

}
function no(){

 alert('El Email que ingresaste no existe. Verifica el Email e intenta nuevamente')  
  window.location="restaurar.php";   


}



$(document).ready(function() { 
		

	 $(".btn_log").click(function (){
	
			var er_email = /^(.+\@.+\..+)$/   
		
			 $(".error").remove();
			
 	 	if( $("#txtmail").val() == "" ){
            $("#txtmail").focus().after("<span class='error'>Ingrese Email</span>");
            return false;
        }			
        
             var nom = document.getElementById('txtmail').value;
		 if(!er_email.test(nom)) {    
    	 $("#txtmail").focus().after("<span class='error'>Email no v&aacute;lido</span>");
		 return false   
    		}
         
        	
			 		
				
	
	
  });


$("#txtmail").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });	



    
 
    
	


}); 


//-->
</script>

<body id="main_body" >
	<img src="top.jpg"  height="100%" width="100%">

<table bgcolor="gray" style="width:100%;opacity: 0.9;
    filter: alpha(opacity=90)" > 
	<tr>
		 <td>
			 
  <div align="center">
		<h2 align="center">Restaurar Contraseña</h2>

    
     Para restaurar tu contraseña por favor ingresa el email que registraste. te enviaremos tu información para que puedas restaurar tu contraseña.
    <form id="frmlog" name="frmlog" method="post" action="" onsubmit="">
  

  
  <br>
   
    

        Email

<br>


<input name="txtmail" id="txtmail"type="text"  value="" size="30" maxlength="254" />
      
 <br>
<br>
     
 
      
  

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
	
	  
	 $_SESSION['sinoinfo12-qe']="true";
///--------------------------
	include("classes/c_asistentes1.php");
	
	$d = new asistente;
				
if ($_POST['action'] == "Restaurar") {


	$nnq=$d->enviar( $_POST['txtmail']);
   		if ($nnq==0){
		
			echo '<BODY onLoad="javascript:no()">';
			}else {
	
	
	echo '<BODY onLoad="javascript:msg()">'; 
		
        
}

	
	
	
	
	}

	



	//	include("listo.php");
	//	 $nn=alu::ver();
		
	////	if ($nn==0){				
     //    alu::guardar();
	
	
 
  } else {
	  
     	echo "<div align='center'>Lo sentimos, no se enviaron tus datos, por que no has logrado proporcionar el código de la imagen correcta! Inténtelo de nuevo ... </div>";
  }
}


echo '<div align="center">'.recaptcha_get_html($publickey, $error).'</div>';
?>
        
     

   
        
           <input type="submit" class="btn_log" name="action" id="button" value="Restaurar" />
            
       
       
   </form>
   </td>
  </tr>
		</table>
		
    
  <div align="left"> 
   <h2> <a href="login.php" title="Iniciar Sesión" style="text-decoration:none; color:black" onmouseover="status='';return true" onclick="status='';return true" >Iniciar Sesión</a> </h2>
 
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
     <img src="pie.jpg"  height="100%" width="100%">  
   <br>
    
 </body>

<html>
