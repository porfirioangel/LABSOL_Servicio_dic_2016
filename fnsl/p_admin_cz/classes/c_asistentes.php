<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

$p_usuario=$_SESSION['p_usua'];
 $p_nombre=$_SESSION['p_noma'];
 $p_tipo=$_SESSION['p_tipoa'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="pagoss"  or  $p_usuario!="" and $p_nombre!="" and $p_tipo=="materialls" or $p_usuario!="" and $p_nombre!="" and $p_tipo=="admin" )
{
	
 $p_usuario=$_SESSION['p_usu'];
 $p_nombre=$_SESSION['p_nom'];
 $p_tipo=$_SESSION['p_tipo'];


function conectarse()
{

if(!($link=@mysql_connect("127.0.0.1","cozcyt_fnslabsol","fns_*l4bs2")))
{
echo "error conectando a la base de datos.";
exit();
}
if (!@mysql_select_db("cozcyt_labsolfnsl",$link)) //nombre de la base de datos ---

{
echo "error seleccionando la base de datos.";
exit();
}
return $link;
} 
$link=conectarse();
 
  
class asistente {



function abrir_mat ($usu){	
 
//echo "select * from asistentes where nombre='$nom' and apellidos='$ape' and email='$mail' and activo=1";
  $dep=@mysql_query("select * from asistentes where matricula='$usu' and activo=1");
  $depp = @mysql_fetch_array($dep);
 
   @mysql_close($link);
   return $depp;
 
}
function abrir_usu ($usu){	

//echo "select * from asistentes where nombre='$nom' and apellidos='$ape' and email='$mail' and activo=1";
  $dep=@mysql_query("select * from asistentes where login='$usu' and activo=1");
  $num=@mysql_num_rows ($dep);
  return $num;
 
}

function abrir_tal (){	

//echo "select * from asistentes where nombre='$nom' and apellidos='$ape' and email='$mail' and activo=1";
  $dep=@mysql_query("select * from taller");
 
  return $dep;
 
}

function vertaller ($tal,$usu){	



		  $dep=@mysql_query("select * from taller where id_taller=".$tal."");
		  $depp = @mysql_fetch_array($dep);
			
			$hora= $depp['hora'];
			$fecha=$depp['fecha'];
			
			
			$otro=@mysql_query("select * from asistentes inner join expediente on asistentes.matricula=expediente.matricula where  expediente.matricula=".$usu." and asistentes.activo=1");
		
	
		
		
		
		 while ($r=mysql_fetch_array($otro))
			  
		  {
		$desp=@mysql_query("select * from taller where id_taller=".$r['id_taller']."");
		$despp = @mysql_fetch_array($desp); 
		$horay= $despp['hora'];
		$fechay=$despp['fecha'];
		
	
		if ($hora==$horay and $fecha==$fechay){
			
		return 1;	
		exit;
		            }		  
		  
		  }
			
			return 0;
		  
		  
  
  
 
 
}
function guardartaller ($tal,$usu){	

$q1="select * from taller where id_taller =".$tal;
$result1=mysql_query($q1);
$row = mysql_fetch_array($result1); 
 $num_al=$row["cantidad"];
 
  if ($num_al>=1){
  
  $num_al-=1;
   $q2="update taller set cantidad=".$num_al." where id_taller=".$tal;  
  mysql_query($q2);
 
  
  @mysql_query("insert into expediente values ('',$usu,$tal,'".date("Y-m-d H:m:s")."')");

return 1;
  // echo '<center><h1>TU PREINSCRIPCION FUE COMPLETADA CON EXITO</center></h1>';

 }else{
	 return 0;
// echo '<center><h1>ESTE TALLER YA ESTA LLENO, NO SE REALIZO TU PREINSCRIPCION</center></h1>';
}

			
			
}


public function abrir ($nom, $ape, $mail){	

//echo "select * from asistentes where nombre='$nom' and apellidos='$ape' and email='$mail' and activo=1";
  $dep=@mysql_query("select * from asistentes where nombre='$nom' and apellidos='$ape' and email='$mail' and activo=1");
  $num=@mysql_num_rows ($dep);
  return $num;
 
}

function editar ($id){
 $dep=@mysql_query("select * from asistentes where matricula=$id");
  $depp = @mysql_fetch_array($dep);
   @mysql_close($link);
  return $depp;
 
}

function guardar_pago ($mt,$rd,$tall,$tipo,$folio,$costo){
 $fechahoy=date("Y/m/d");
 $p_usuario=$_SESSION['p_usua'];
   @mysql_query("insert into pagos values ('',$mt,$tall,'$rd','$tipo',$costo,'$folio','$fechahoy',$p_usuario)");
   }
   
   function guardar_pago1 ($mt,$rd,$tall,$tipo,$costo){
 $fechahoy=date("Y/m/d");
 $p_usuario=$_SESSION['p_usua'];
   @mysql_query("insert into pagos values ('',$mt,$tall,'$rd','$tipo',$costo,'','$fechahoy',$p_usuario)");
   }
   
   function guardar_pago2 ($mt,$rd,$tipo,$costo){
 $fechahoy=date("Y/m/d");
 $p_usuario=$_SESSION['p_usua'];
   @mysql_query("insert into pagos values ('',$mt,'','$rd','$tipo',$costo,'','$fechahoy',$p_usuario)");
   }
   
   function guardar_pago3 ($mt,$rd,$tipo,$folio,$costo){
 $fechahoy=date("Y/m/d");
 $p_usuario=$_SESSION['p_usua'];
   @mysql_query("insert into pagos values ('',$mt,'','$rd','$tipo',$costo,'$folio','$fechahoy',$p_usuario)");
   }
  
  function guardar_material ($mt,$tipo){
 $fechahoy=date("Y-n-j H:i:s");
 $p_usuario=$_SESSION['p_usua'];
   @mysql_query("insert into material values ('',$mt,'$tipo','$fechahoy',$p_usuario)");
   }

function guardar ($nom,$ape,$mailer,$inst,$user,$pass,$tel){	

//$user2=str_rot13($user);
//$pass1=str_rot13($pass);
//$pass2=strrev($pass1);
 $fechahoy=date("Y/m/d");
 //echo "insert into asistentes values ('','$nom','$ape','$mail','$inst','$user','$pass','$tel',1,'$fechahoy')";
  @mysql_query("insert into asistentes values ('','$nom','$ape','$mailer','$inst','$user','$pass','$tel',1,'$fechahoy')");
  
 $dep=@mysql_query("select * from asistentes where nombre='$nom' and apellidos='$ape' and email='$mailer' and activo=1");
  $depp = @mysql_fetch_array($dep);
 

  $_SESSION['p_usu']=$depp['matricula'];
   $_SESSION['p_nom']=$depp['nombre']." ".$depp['apellidos'];
  $_SESSION['p_tipo']="asis";
  $_SESSION["lastoutaccess"]= date("Y-n-j H:i:s");
  





 require('class.phpmailer.php');
 require('class.smtp.php');
 $mail = new PHPMailer();
 
 $body = "<strong>Registro Exitoso</strong>
	<br><br><strong>Nombre: </strong>".$depp['nombre']." ".$depp['apellidos']."<br>
	<strong>Correo: </strong>".$depp['email']."<br>
	<strong>Institucion: </strong>".$depp['institucion']."<br>
	<strong>Telefono: </strong>".$depp['telefono']."<br>
	<strong>Nombre de Usuario: </strong>".$depp['login']."<br>
	<strong>Contrase&ntilde;a: </strong>".$depp['nip']."<br>
	<br>Estaremos En Contacto En Los Proximos Dias con mas Noticias.<br><br><br>Saludos!<br><br></strong><a  href='http://cisol.org.mx/webapp/asistente/login.php'>Iniciar Sesion</a>";
	$body.= "<br><br><i>Enviado por http://cisol.org.mx</i>";
	$mail->Body = utf8_decode($body);
	$mail->IsHTML(true);
	$mail->IsSMTP();

 $mail->Host = "mail.cisol.org.mx";
 $mail->From = "soporte@cisol.org.mx";
 $mail->FromName = "Congreso Internacional de Software Libre Zacatecas 2012";
 $mail->Subject = "Registro Exitoso";
 $mail->MsgHTML(utf8_decode($body));
 $mail->AddAddress($mailer,utf8_decode($nom." ".$ape));
  $mail->AddBCC("soporte@cisol.org.mx","soporte");
 $mail->SMTPAuth = true;
 $mail->Username = "soporte@cisol.org.mx";
 $mail->Password = "2A4*.Q2dx$"; 
 
 if(!$mail->Send()) {
 //echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
 //echo "Message sent!";
 } 
  
 }

  function modificar ($pass){	

 $p_usuario=$_SESSION['p_usu'];
 @mysql_query("update asistentes set nip='$pass' where matricula='$p_usuario' ");
    }






function error(){
return ('Error'.'<br>'.'Verifique con el Admnistrador' );
}
}

}else{
	echo "No tienes Permisos";
	
	}

?>
