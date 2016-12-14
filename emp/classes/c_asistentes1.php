<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

 
 if ( $_SESSION['sinoinfo12-qe']=="true"  )
{
	?>

<?php




class asistente {



function enviar ($mma){	
include("conecta.php");	
$link=conectarse();

///////////////////////////
/*
 require('class.phpmailer.php');
 require('class.smtp.php');
 $mail = new PHPMailer();
 
 $body = "<strong>Registro exitoso</strong>
	<br><br><strong>Nombre: </strong>".$depp['nombre']." ".$depp['apellidos']."<br>
	<strong>Correo: </strong>".$depp['email']."<br>
	<strong>Instituci&#243;n: </strong>".$depp['institucion']."<br>
	<strong>Telefono: </strong>".$depp['telefono']."<br>
	<strong>Nombre de usuario: </strong>".$depp['login']."<br>
	<strong>Contrase&ntilde;a: </strong>".$depp['nip']."<br>
	<br>Estaremos en contacto en los pr&#243;ximos d&#237;as.<br><br><br>Saludos!<br><br></strong><a  href='http://www.conlibre.org/escverano13/registro/login.php'>Iniciar Sesi&#243;n</a>";
	$body.= "<br><br><i>Enviado por http://conlibre.org/</i>";
	$mail->Body = utf8_decode($body);
	$mail->IsHTML(true);
	$mail->IsSMTP();
	
	

 $mail->Host = "mail.conlibre.org";
 $mail->From = "cursos@conlibre.org";
 $mail->FromName = "Escuela de Verano 2013";
 $mail->Subject = "Registro exitoso";
 $mail->MsgHTML(utf8_decode($body));
 $mail->AddAddress($mailer,utf8_decode($nom." ".$ape));
  $mail->AddBCC("cursos@conlibre.org","Cursos");
 $mail->SMTPAuth = true;
 $mail->Username = "cursos@conlibre.org";
 $mail->Password = "sd@?_Ha*.3je0ad"; 
 
 if(!$mail->Send()) {
 //echo "Mailer Error: " . $mail->ErrorInfo;
// exit();
 } else {
 //echo "Message sent!";
 } */
/////////////////////////////


require_once('class.phpmailer.php');
 
$correo = new PHPMailer();


	//for ($md = 1; $md <= 293; $md++){
	
$result=mysql_query("select * from asistentes where activo=1 and email ='".$mma."'",$link); 
 $num_r=mysql_num_rows($result);
 if ($num_r!=0){
//while(
$depp=mysql_fetch_array($result);

//)
//{


$nom=$depp['nombre'];
$ape=$depp['apellidos'];
$cor=$depp['email'];

 
 $body = "<strong>Sus Datos:</strong>
 <br><br>

    <strong>Nombre: </strong>".$depp['nombre']." ".$depp['apellidos']."<br>
	<strong>Correo: </strong>".$depp['email']."<br>
	<strong>Instituci&#243;n: </strong>".$depp['institucion']."<br>
	<strong>Nombre de Usuario: </strong>".$depp['login']."<br>
	<strong>Contrase&ntilde;a: </strong>".$depp['nip']."<br>
	
<br>Estaremos en contacto en los pr&#243;ximos d&#237;as.<br><br><br>Saludos!<br><br></strong><a  href='http://www.cozcyt.gob.mx/labsol/emp/login.php'>Iniciar Sesión </a>
	";
	$body.= "<br><br><i>Enviado por http://cozcyt.gob.mx/labsol/</i>";
	$correo->Body = utf8_decode($body);
	
		$correo->IsHTML(true);
	//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom("registro-labsol@cozcyt.gob.mx", "Emprendimiento de Alto Impacto");
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
	
	

return 1;
}

return 0;
 }}
	


?>


<?php }else{
	
	header("Location: ../denegado.php");
	}?>