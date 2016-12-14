<?php session_start();
session_cache_limiter('nocache,private');

$p_usuario=$_SESSION['p_usu'];
 $p_nombre=$_SESSION['p_nom'];
 $p_tipo=$_SESSION['p_tipo'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="asis"  )
{

	include("classes/conecta.php");
	
$link=conectarse();
 $q=$_GET["q"];
 
 
$qi=mysql_query("select * from taller where id_taller=".$q); 
 $r=mysql_fetch_array($qi);

function mes($mes){
if ($mes=="01") $mes="Enero";
if ($mes=="02") $mes="Febrero";
if ($mes=="03") $mes="Marzo";
if ($mes=="04") $mes="Abril";
if ($mes=="05") $mes="Mayo";
if ($mes=="06") $mes="Junio";
if ($mes=="07") $mes="Julio";
if ($mes=="08") $mes="Agosto";
if ($mes=="09") $mes="Septiembre";
if ($mes=="10") $mes="Octubre";
if ($mes=="11") $mes="Noviembre";
if ($mes=="12") $mes="Diciembre";
 return $mes;
}



$nom_mes=mes(substr($r['fecha'],5,2));


 
//$a1="*Es recomendable que los asistentes cuenten con computadora portátil";
$a2="*El cupo es limitado por lo que es importante su registro lo antes posible.";
//$a3="*El pago se realizará en el lugar.";
//$b1="Área de Ciencias de la Salud";
//$b2="Campus UAZ Siglo XXI";
$sp="</br>";
//$ab1="* Antes del dia 04 de Mayo del 2012 el costo de cada taller es de $250, a partir del 05 mayo 2012 el costo de cada taller sera $350 ";

$ab1="* Costos: <br> Intermedio: $300.00 <br> Avanzado $350.00 ";

echo '<li id="li_4" style="color:black;font-weight: bold;" >
		<label for="element_4">Taller </label>
		<div  style="color:white;font-weight: bold;">
		'.$r['nombre'].'
		</div> 
		</li><li id="li_4" style="color:black;font-weight: bold;">
		<label  for="element_4">Coordinador </label>
		<div  style="color:white;font-weight: bold;">
		'.$r['coordinador'].'
		</div> 
		
		</li><li id="li_4" style="color:black;font-weight: bold;">
		<label  for="element_4">Fecha </label>
		<div  style="color:white;font-weight: bold;">
		'.$r['fecha'].'
		</div> 
		
		</li><li id="li_4"style="color:black;font-weight: bold;" >
		<label  for="element_4">Hora </label>
	<div  style="color:white;font-weight: bold;">
		'.$r['hora'].'
		</div> 
		</li><li id="li_4" style="color:black;font-weight: bold;">
		<label  for="element_4">Lugar </label>
		<div  style="color:white;font-weight: bold;">
		
		'.$r['lugar'].'
		</div> </li>
 <li class="section_break">
					</li>
					<li id="li_4" style="color:black;font-weight: bold;" >
		<label  for="element_4">'.$a2.' </label>
			</li>
			
					
  ';


 


 
 }else
{
	header("Location: denegado.php");
}
 ?>
