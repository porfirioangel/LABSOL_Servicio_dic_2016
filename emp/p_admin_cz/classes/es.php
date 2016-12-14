<?php session_start();
session_cache_limiter('nocache,private');



$p_usuario=$_SESSION['p_usua'];
 $p_nombre=$_SESSION['p_noma'];
 $p_tipo=$_SESSION['p_tipoa'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="admin"  )
{?>
<script>
function redireccionar(){
alert("Se Envio el Correo con sus datos Correctamente")
	 window.location="../asistentes.php"; 
}  
//setTimeout ("redireccionar()", 5000); //tiempo expresado en milisegundos 
</script>
<?php


include("conecta.php");	
$link=conectarse();



	
	//Incluimos la clase de PHPMailer
require_once('class.phpmailer.php');
 
$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()
 
		
	
	$md=$_GET['mail'];
	//for ($md = 1; $md <= 293; $md++){
	
$result=mysql_query("select * from asistentes where activo=1 and matricula =".$md,$link); 
 $num_r=mysql_num_rows($result);

 
 if ($num_r!=0){
//while(
$depp=mysql_fetch_array($result);
//mysql_free_result($depp);
//)
//{


$nom=$depp['nombre'];
$ape=$depp['apellidos'];
$cor=$depp['email'];

 
 $body = "<strong>Sus Datos:</strong>
 <br><br>

    <strong>Nombre: </strong>".$depp['nombre']." ".$depp['apellidos']."<br>
	<strong>Correo: </strong>".$depp['email']."<br>
	<strong>Institución: </strong>".$depp['institucion']."<br>
	<strong>Nombre de Usuario: </strong>".$depp['login']."<br>
	<strong>Contrase&ntilde;a: </strong>".$depp['nip']."<br>
	<a  href='http://www.cozcyt.gob.mx/flisol/registro/login.php'>Iniciar Sesión </a>
	";
	$body.= "<br><br><i>Enviado por http://cozcyt.gob.mx/flisol/</i>";
	

 
		
	$correo->Body = utf8_decode($body);
	$correo->IsHTML(true);
	

	
//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom("registro-labsol@cozcyt.gob.mx", "Flisol Zacatecas 2016");
 //Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo("registro-labsol@cozcyt.gob.mx","Soporte");

 //Ponemos el asunto del mensaje
$correo->Subject = ("Datos de la Cuenta");


 //Usamos el AddAddress para agregar un destinatario


 $correo->MsgHTML(utf8_decode($body));
// $mail->AddAddress($depp['email'], $nom." ".$ape);

 $correo->AddAddress($cor, utf8_decode($nom." ".$ape));
 
  $correo->AddBCC("registro-labsol@cozcyt.gob.mx", "soporte");

 
 $correo->Send();
$cor="";
$nom="";
$ape="";
$correo->ClearAddresses();
$correo->ClearBCCs();
echo '<BODY onLoad="javascript:redireccionar()">'; 


	


?>


<?php } }else{
	
	header("Location: ../denegado.php");
	}?>