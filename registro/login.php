<?php session_start();
session_destroy();
session_cache_limiter('nocache,private');
unset( $_SESSION['p_usu'], $_SESSION['p_nom'],$_SESSION['p_tipo'],$_SESSION["lastoutaccess"]);



	
if ($_POST['action'] == "Aceptar" and $_POST['txtuser']!="" and $_POST['txtpass']!="") {
	
	

		include("classes/c_verifica.php");
	
	$d = new verifica;
		
	$nn=$d->abrir_usuario($_POST['txtuser'],$_POST['txtpass']);
	
	if ($nn==1){
	echo '<BODY onLoad="javascript:index()">';  
	}
		  
    } 
	
	

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
	    <script type="text/javascript">
	
function index(){
window.location="info.php"; 

}
 
$(document).ready(function() { 
		

	 $(".btn_log").click(function (){
	
		var er_string2 = /^([0-9]|[a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/  
		
			 $(".error").remove();
			
 	if( $("#txtuser").val() == "" ){
            $("#txtuser").focus().after("<span class='error'>Ingrese Usuario</span>");
            return false;
        }			
        
        	   var nom = document.getElementById('txtuser').value;
		 if(!er_string2.test(nom)) {    
    	 $("#txtuser").focus().after("<span class='error'>Usuario no v&aacute;lido</span>");
		 return false   
    		}
    		
    		
    			 if( $("#txtpass").val() == "" ){
            $("#txtpass").focus().after("<span class='error'>Ingrese Contraseña</span>");
            return false;
        }
        
        	
			 		
				
	
	
  });


$("#txtuser").keyup(function(){
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
    
 
    
	


}); 

</script>
<head>

 <title>:: Acceso ::</title>


 <style type="text/css">
 <!--
.rt-pagination {display: none;}
.a {
	color: #FFF;
	font-size:13px;
}
.b{
	font-size:18px;
	color:#000;

}
.c{
	font-size:14px;
	color:#000;
	font-weight: bold;

}
.d{
	font-size:12px;
	color:#000;
	font-weight: bold;

}

.ddd{
	font-size:14px;
	color:#860A04;
	font-weight: bold;

}
.dd{
	font-size:12px;
	color:#000;
	


}
.e{
	font-size:10px;
	color:#000;
	font-weight: bold;

}

.s{color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: gray;
	
	}

 -->
 </style>
 


 
      <table bgcolor="gray" style="width:100%;opacity: 0.9;
    filter: alpha(opacity=90)" > 
	<tr>
		 <td>
      <table width="100%" border="0">
  <tr>
  <br />	
    <td align="center" class="b"> <p>Acceso
      </p>
      <form id="frmlog" name="frmlog" method="post" action="" onsubmit="">
        <table width="237" border="0" align="center">
  <tr>
    <td class="c" width="83">Usuario:</td>
    <td width="401">
      <label for="txtpass"></label>
      <input type="text" name="txtuser" id="txtuser"  value="" size="20" maxlength="16" />
    </td>
  </tr>
  <tr>
    <td class="c">Contraseña:</td>
    <td><input type="password" name="txtpass" id="txtpass"  value="" size="20" maxlength="13" /></td>
  </tr>
  <tr>
  
    <td colspan="2"><div align="center">
    <br>	
      <input type="submit" class="btn_log" name="action" id="action" value="Aceptar" />
 
      <input type="reset" name="button2" id="button2" value="Limpiar" />
    </div></td>
  </tr>
</table>
</form></td>
    </tr>
</table>
		</td>
  </tr>
		</table>
<br/>


    <p>&nbsp;</p>






    <div align="left" >
   
   
     <h3> <a href="restaurar.php" title="Olividaste tu Contraseña y Nombre de Usuario" style="text-decoration:none; color:black" onmouseover="status='';return true" onclick="status='';return true" >Olividaste tu Contraseña y Nombre de Usuario</a> </h3>
    </div>
    
 </div>
   <br>
   <br>
     <br>
       <br>  <br>
         <br>
           <br>
             
           <br>
              <br> <br>
           <br>
 <img src="pie.jpg"  height="100%" width="100%">  
 
 </body>

<html>
