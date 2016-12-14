<?php
session_start();
//$_SESSION['matri'];
//$mat=$_POST['matricula'];
//$_SESSION['matri'] = $mat;

?>


<script>
function index(){
 alert('No Hay Datos , No se Guardo Tu Encuesta, Vuelve a Realizarla')  
location.href="./index.html"
}

function index1(){
location.href="ar.php"

}

function index2(){
 location.href="af.php"

}

function index3(){
  location.href="sc.php"

}

function index4(){
location.href="imprime/ticket.php"

}
function redireccionar(){ 
  window.location="http://csaluduaz.com/index/"; 
}  
setTimeout ("redireccionar()", 5000); //tiempo expresado en milisegundos 
 



</script>

<?php


if($_SESSION['matri']!="")
	{
	$mat=$_SESSION['matri'];
if($mat==""){

echo '<BODY onLoad="javascript:index()">';
}else{
$_SESSION['matri'] = $mat;



include("conexion.php");
$link=conectarse();




$rest=mysql_query("SELECT * FROM ar WHERE matricula='$mat'",$link);
$t=mysql_num_rows($rest);

$resa=mysql_query("SELECT * FROM af WHERE matricula='$mat'",$link);
$a=mysql_num_rows($resa);

$resdr=mysql_query("SELECT * FROM sc WHERE matricula='$mat'",$link);
$dr=mysql_num_rows($resdr);

 $total=$d.$t.$a;
 
 //.$dr
 

switch($total){



case "000":
echo '<BODY onLoad="javascript:index1()">';
break;

case "100":
echo '<BODY onLoad="javascript:index2()">';
break;

case "110":
echo '<BODY onLoad="javascript:index3()">';
break;

case "111":
echo '<BODY onLoad="javascript:index4()">';
break;
default:
echo"<center><h2><br>Error<br></h2>";
echo 'Se Redireccionara Automaticamente en 5 segundos</center>';
break;

}

}

}else{
echo"<center><h2><br>Error Desconocido Vuelva a Realizar La Encuesta<br></h2>";
echo 'Se Redireccionara Automaticamente en 5 segundos</center>';
}

?>
