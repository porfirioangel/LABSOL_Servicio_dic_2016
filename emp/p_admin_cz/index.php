<?php session_start();
session_destroy();
session_cache_limiter('nocache,private');
unset( $_SESSION['p_usup'], $_SESSION['p_nomp'],$_SESSION['p_tipop'],$_SESSION["lastoutaccess"]);



	
if ($_POST['action'] == "Aceptar" and $_POST['txtusu']!="" and $_POST['txtpass']!="") {
	
	

		include("classes/c_verifica.php");
	
	$d = new verifica;
		
	$d->abrir_usuario($_POST['txtusu'],$_POST['txtpass']);
	
	
		  
    } 
	
	

		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" SYSTEM "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">


<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<link rel="shortcut icon" href="images/cisol000.png" type="image/x-icon">

<title>Iniciar Sesión</title>
<meta name="generator" content="WordPress 3.0">
<meta name="robots" content="follow, all">
<link rel="stylesheet" href="images/style000.css" type="text/css" media="screen">
<link rel="alternate" type="application/rss+xml" title="%s Feed RSS CISOL" href="http://cisol.org.mx/feed/">
<link rel="pingback" href="http://www.cisol.org.mx/xmlrpc.php">
<!--[if IE]><link rel="stylesheet" href="http://www.cisol.org.mx/wp-content/themes/eos/ie.css" type="text/css" media="screen" /><![endif]-->
<!--[if lte IE 6]><link rel="stylesheet" href="http://www.cisol.org.mx/wp-content/themes/eos/ie6.css" type="text/css" media="screen" /><![endif]-->
<script type="text/javascript" src="images/default0.js"></script>

	<link rel="stylesheet" href="images/dcssb000.css" type="text/css" media="screen">
	<!--Facebook OpenGraph Slick Social Share Buttons -->
	<meta property="og:site_name" content="CISOL">
		<meta property="og:title" content="CISOL">
		<meta property="og:url" content="http://www.cisol.org.mx">
		
		<meta property="og:image" content>
		<meta property="fb:admins" content>
		<meta property="fb:app_id" content>
		<meta property="og:type" content="blog"><!--End Facebook OpenGraph Settings -->
		<link rel="stylesheet" id="smooth_slider_headcss-css" href="images/style001.css" type="text/css" media="all">
<script type="text/javascript" src="images/jquery00.js"></script>
<script type="text/javascript" src="images/jquery01.js"></script>
<script type="text/javascript" src="images/jquery02.js"></script>
<script type="text/javascript" src="images/jquery03.js"></script>
<script type="text/javascript" src="images/moderniz.js"></script>
<script type="text/javascript" src="images/jquery04.js"></script>
<script type="text/javascript" src="images/comment-.js"></script>
<script type="text/javascript" src="images/ga000000.js"></script>
<script type="text/javascript" src="images/jquery05.js"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.cisol.org.mx/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.cisol.org.mx/wp-includes/wlwmanifest.xml"> 
<link rel="index" title="CISOL" href="http://cisol.org.mx/">
<link rel="prev" title="Index" href="http://cisol.org.mx/acerca-de/">
<link rel="next" title="Blog" href="http://cisol.org.mx/blog/">
<meta name="generator" content="WordPress 3.0">
<link rel="canonical" href="http://cisol.org.mx/">




    <script type="text/javascript">
<!--




function validacion(formulario) {
	var er_string = /^([a-z]|[0-9]|_|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/    
		var er_pass = /^([0-9]|[a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/    
		var er_numbers = /^([0-9])+$/            
		var er_email = /^(.+\@.+\..+)$/   
		var er_cbo =  /^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s)+$/   
		var x 
			
		
		if(!er_string.test(frmlog.txtusu.value)) {    
    		    alert('Nombre de usuario no válido.')   
      		  return false   
    		}  
		
		
		
		
			if(frmlog.txtpass.value=="") {    
    		    alert('Contraseña no válida.')   
      		  return false   
    		}  
		
		
						
  
	
	
    	return true            //cambiar por return true para ejecutar la accion del formulario   
}   


//-->
</script>
</head>

<body>

<a id="skipToContent" href="http://cisol.org.mx/#content">Saltar al contenido</a>
<div class="PageContainer">

<div class="Header">
<div class="HeaderMenu" id="HeaderMenu">

	<span class="clear"></span>
</div>

<div class="HeaderSubArea">
	<!--<h1><a href="http://cisol.org.mx">CISOL</a></h1>
	<span></span>-->
    <div id="organizadores" style="padding:10px 350px;">
    	<img src="images/footer_0.png" width="160" height="70">
        <img src="images/footer_1.png" width="90" height="70">
    </div>
</div> 
<!-- Closes .HeaderSubArea -->

</div> <!-- Closes .Header -->

<div id="contentWrapper">
	<div id="contentArea">
				<div class="headerBar"></div>
		

<div class="post" id="post-6">
	<div class="postHeader">
		<h2  align="center" class="postTitle"><span></span>Iniciar Sesion</h2>
	</div>
    
    <div class="postContent">
    <div class="postFooter">
		</div>
 
   
   <div align="center"> 
   <form   method="post" name="frmlog"  onsubmit="return validacion(this)">
  

  
  <br>
   
    <p><label></label>
      <label></label>
      <label></label></p>
    <table width="45%" align="center">
      <tr>
 <td  class="ddd">
    <label>Nombre de usuario</label></td>
<td height="40"><input name="txtusu" type="text"  value="" size="25" maxlength="12"  /></td>
     </tr>

<tr>
 <td  class="ddd">
    <label>Contraseña</label></td>
<td height="40"><input name="txtpass" type="password"  value="" size="25" maxlength="12" /></td>
     </tr>

     
    </table>

  
           <input type="submit" name="action" id="button" value="Aceptar" />
            
    </form>

    </div>
    <br />
    
    
    
   
   
    </div>
	
	
	
</div>





</div>
	





</div>


					
		
			


</body>
</html>
