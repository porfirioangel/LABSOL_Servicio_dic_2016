<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

$p_usuario=$_SESSION['p_usu'];
 $p_nombre=$_SESSION['p_nom'];
 $p_tipo=$_SESSION['p_tipo'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="asis"  )
{?>

<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
</head>
<body>
<img src="top.jpg"  height="100%" width="100%">
<div id='cssmenu'>
<ul>

	  
   <li class='active'  ><a href='info.php'>Inicio</a></li>
   <li><a href='preinscripcion.php'>Pre-Inscripción a taller</a></li>
    
   <li><a href='asistente.php'>Información de tu Cuenta</a></li>
   <li><a href='prog.php'>Programa del evento</a></li>

   <li><a href='script.php'>Salir</a></li>
   
	  
	     
</ul>
</div>

</body>

<html>


<?php }else{
	
	header("Location: denegado.php");
	}?>
