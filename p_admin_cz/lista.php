<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

$p_usuario=$_SESSION['p_usua'];
 $p_nombre=$_SESSION['p_noma'];
 $p_tipo=$_SESSION['p_tipoa'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="admin"  )
{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" SYSTEM "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">


<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<link rel="shortcut icon" href="images/cisol000.png" type="image/x-icon">

<title>Administracion</title>
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

<!-- Dynamic Content Gallery plugin version 3.3.5 www.studiograsshopper.ch  Begin jQuery smoothSlideshow scripts -->
<style type="text/css">
#dfcg-slideshow {
	color:#fff;
	list-style:none;
	}
	
#dfcg-slideshow span {
	display:none;
	}

#dfcg-wrapper {
	display:none;
	margin:0px;
	}
	
#dfcg-wrapper * {
	margin:0;
	padding:0;
	/*overflow:hidden;Added AW */
	}
	
#dfcg-fullsize {
	background:#000000;
	border:0px solid #000000;
	height:290px;
	overflow: hidden;
	padding:0px;
	position:relative;
	z-index:1;/* Fix added in v3.3.3 */
	width:550px;
	}
	
#dfcg-text {
	background-color:#000000 !important;
	bottom:0;
	filter:alpha(opacity=70);
	height:0px;
	opacity:.7;
	overflow:hidden;
	padding-bottom:1px;/* Fix added in v3.3.3 - was 5px */
	position:absolute;
	width:550px;
	z-index:200;
	}

#dfcg-text h3 {
	color:#FFFFFF !important;
	margin:2px 5px !important;
	padding:0px 0px !important;
	font-size:12px !important;
	font-weight:bold !important;
	}

#dfcg-text p {
	color:#FFFFFF !important;
	font-size: 11px !important;
	line-height:14px !important;
	margin:2px 5px !important;
	padding:0px 0px !important;
	}
	
#dfcg-text p a, #dfcg-text p a:link, #dfcg-text p a:visited {
	color: #FFFFFF !important;
	font-weight:normal !important;
	}

#dfcg-text p a:hover {
	color: #FFFFFF !important;
	font-weight:bold !important;
	}
	
#dfcg-image img {
	position:absolute;
	z-index:25;
	width:auto;
	/*height:px;/* Added AAW - not sure */
	}

.dfcg-imgnav {
	position:absolute;
	width:25%;
	height:290px;
	cursor:pointer;
	z-index:150;
	}

#dfcg-imgprev {
	left:0;
	background:url(Inicio\ -\ CISOL_files/fleche10.png) left center no-repeat;
	}
	
#dfcg-imgnext {
	right:0;
	background:url(Inicio\ -\ CISOL_files/fleche20.png) right center no-repeat;
	}
	
#dfcg-imglink {
	position:absolute;
	width:100%;
	z-index:100;
	opacity:.01;/* changed v3.3.3 */
	filter:alpha(opacity=1);/* changed v3.3.3 */
	background:#fff;/* added v3.3.3 */
	}
	
.linkhover {
	background:url(http://cisol.org.mx/images/link.gif) center center no-repeat;
	}
	
#dfcg-thumbnails {
	position: absolute;
	top: -110px;
	left: 0;
	z-index: 999;
	height: 130px;
	}

#slideleft {
	float:left;
	width:20px;
	height:81px;
	background:url(http://cisol.org.mx/images/scroll-left.gif) center center no-repeat;
	background-color:#222;
	}
	
#slideleft:hover {
	background-color:#333;
	}
	
#slideright {float:right;
	width:20px;
	height:81px;
	background:#222 url(http://cisol.org.mx/images/scroll-right.gif) center center no-repeat;
	}
	
#slideright:hover {
	background-color:#333;
	}
	
#dfcg-slidearea {
	float:left;
	position:relative;
	width:550px;
	height:81px;
	overflow:hidden;
	padding-top: 6px;
	}
	
#dfcg-slider {
	position:absolute;
	left:0;
	height:81px;
	}
	
#dfcg-slider img {
	cursor:pointer;
	border:1px solid #fff;
	padding:0px;
	height: 75px;
	}
	
#dfcg-thumbnails .dfcg-carouselBtn {
    position: absolute;
    bottom: -3px;
    right: 20px;
    display: block;
    color: #fff;
    cursor: pointer;
    font-size: 13px;
    padding: 0px 8px 3px;
	}

.dfcg-carouselBtn, .dfcg-sliderContainer {
    background: #000;
    opacity: 0.9;
    filter: alpha(opacity=90);
	}

#dfcg-thumbnails .dfcg-sliderContainer {
    height: 110px;
    position: relative;
    width: 550px;
    padding: 0 5px;
	}
	
#dfcg-sliderInfo {
    color: #fff;
    bottom: 5px;
    position: absolute;
    padding-left: 5px;
	}
</style>
<!-- End of Dynamic Content Gallery plugin scripts -->

	<link rel="stylesheet" type="text/css" href="images/dcjq-meg.css" media="screen"><style type="text/css" media="screen">.jcarousel-skin-default .jcarousel-clip-horizontal {padding:0px 0px 0px 0px;width:260px;}.smooth_slider{width:250px;height:190px;background-color:#ffffff;border:1px solid #999999;padding:0 5px 0 10px;}.sldr_title{font-family:Georgia, Arial, Helvetica, sans-serif;font-size:20px;font-weight:bold;font-style:normal;color:#000000;}.smooth_slider .jcarousel-item{width:250px;height:160px;}.smooth_slider h2{clear:none;line-height:17px;font-family:Trebuchet MS, Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;font-style:normal;color:#000000;margin:0px 0 5px 0 !important;}.smooth_slider h2 a{color:#000000;}.smooth_slider span{font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px;font-weight:normal;font-style:normal;color:#333333;}.smooth_slider_thumbnail{float:left;margin:0px 5px 0 0px;max-height:120px;border:1px solid #000000;}.smooth_slider .smooth_slideri div{margin-right:20px}.smooth_slider p.more a{color:#000000;font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px;}.jcarousel-control a{border:1px solid #333333;font-size:12px;font-family:Verdana, Arial, Helvetica, sans-serif;}.jcarousel-control a{color:#000000 !important;}.sldrlink{padding-right:0px;}.sldrlink a{color:#333333 !important;}</style>

	<link rel="stylesheet" href="images/skin0000.css" type="text/css" media="screen">
    
   


   
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
		<h2 class="postTitle" align="center"><span></span>Informacion General</h2>
    
     
	</div>
    <div class="postFooter">
    		</div>
    <div class="postContent">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
    <td  class="ddd">|<a href="asistente.php">Asistentes</a> | <a href="ponentes.php">Ponentes</a> | <a href="archivos.php">Archivos</a> | <a href="taller.php">Talleres</a> | <a href="lista.php">Listas</a> | <a href="constancias.php">Constancias</a> | <a href="reporte_material.php" target="_blank">Reporte de Material</a> | <a href="reporte_pago_entrada.php" target="_blank">Reporte Cobro Paticipacion</a> | <a href="reporte_pago_taller.php" target="_blank">Reporte Cobro Talleres</a> | <a href="script.php"> Cerrar Sesion</a>|</td>
    </tr>
</table>
    <div class="postFooter">
    
		</div>
 
  <div class="ddd">
          <?php
 echo "Bienvenido:"." ".$_SESSION['p_noma'];

 
	?></div>
  
   
   <div class="ddd" align="center"> 
  <form id="form1" name="form1" method="post" target="_blank" action="reporte_taller.php" onsubmit="return validacion(this)">
            <table class="ddd" width="66%" height="200" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><strong>Imprimir Asistentes a Cursos</strong></div></td>
                </tr>
              <tr>
                <td>Taller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php 
 	 include("classes/conecta.php");
$link=conectarse();
					$qi=mysql_query("select * from taller"); ?>
                  <select name="cbo_nive" id="cbo_nive">
                    <option selected="selected">Todos</option>
                    <?php 
	
            while ($r=mysql_fetch_array($qi))
		  {echo"<option value='".$r['id_taller']."'>".$r['nombre']."</option>";}
		 
          ?>
                    </select>
                  <input type="submit" name="button" id="button" value="Imprimir" /></td>
                </tr>
              <tr>
                <td>
                  <div align="left"></div></td></tr>
              <tr>
                <td>
                  <div align="left">
                    <div align="center"></div>
                    </div></td></tr>
              </table>
            </form>
                
            <div class="postFooter">
    		</div>
    
             <div class="ddd" align="center"> 
  <form id="form1" name="form1" method="post"  action="talleres.php" onsubmit="return validacion(this)">
            <table class="ddd" width="66%" height="200" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><strong>Asistencia a Cursos</strong></div></td>
                </tr>
              <tr>
                <td>Taller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php 
 	
					$qi=mysql_query("select * from taller"); ?>
                  <select name="cbo_taller" id="cbo_taller">
                    <option selected="selected"></option>
                    <?php 
	
            while ($r=mysql_fetch_array($qi))
		  {echo"<option value='".$r['id_taller']."'>".$r['nombre']."</option>";}
		 
          ?>
                    </select>
                  <input type="submit" name="button" id="button" value="Ver" /></td>
                </tr>
              
              </table>
            </form>
             
			  <div class="postFooter">
    		</div>
			
			  
             <div class="ddd" align="center"> 
  <form id="form1" name="form1" method="post" target="_blank"  action="reporte_asistentes.php" >
            <table class="ddd" width="66%" height="200" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><strong>Imprimir Lista de Asistentes al Evento</strong></div></td>
                </tr>
              <tr>
                <td>
                 
                  <input type="submit" name="button" id="button" value="Ver Asistentes" /></td>
                </tr>
              
					
              </table>
            </form>
             
            <div class="postFooter">
    		</div>
    
    </div>
            <div class="postFooter">
    		</div>
			
			  
             <div class="ddd" align="center"> 
  <form id="form1" name="form1" method="post"  action="asistencia.php" >
            <table class="ddd" width="66%" height="200" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><strong>Asistencia al Evento</strong></div></td>
                </tr>
              <tr>
                <td>
                 
                  <input type="submit" name="button" id="button" value="Ver Asistentes" /></td>
                </tr>
             
					
              </table>
            </form>
             
            <div class="postFooter">
    		</div>
    
    </div>
    <br />
    
    
    
   
   
    </div>
    
	
	<div class="postLinkPages"></div>
	
</div>

<div id="comments">
	<div class="commentHeader">
			<h4></h4>
</div>
			<!--<p class="nocomments"></p>-->
	</div>




</div>
	





</div>

<div class="Footer"></div><!-- Closes .Footer -->

</div><!-- Closes .PageContainer -->


<!-- End of Dynamic Content Gallery plugin scripts -->

		
			
<footer>
  

</body>
</html>
<!-- This document saved from http://cisol.org.mx/ -->
<?php }else{
	
	header("Location: denegado.php");
	}?>
