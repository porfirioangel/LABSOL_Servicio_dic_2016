<?php session_start();
session_cache_limiter('nocache,private');
?>

<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: http://detectmobilebrowser.com/mobile');
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
<div id='cssmenu'>
<ul>

	  
   <li class='active'  ><a href='../'>Inicio</a></li>
   <li><a href='index.php'>Inscribirse</a></li>
    
   <li><a href='login.php'>Iniciar Sesión</a></li>
   

   
	  
	     
</ul>
</div>
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
