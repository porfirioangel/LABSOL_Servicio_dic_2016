<?php session_start();
session_destroy();


session_cache_limiter('nocache,private');
unset( $_SESSION['p_usu'], $_SESSION['p_nom'],$_SESSION['p_tipo'],$_SESSION["lastoutaccess"]);




  
class verifica {

public function abrir_usuario ($user, $pass){	


if(!($link=@mysql_connect("127.0.0.1","cozcyt_labreg","L465o1reg.|*_")))
{
//echo "error conectando a la base de datos.";
exit();
}
if (!@mysql_select_db("cozcyt_registrolabsol",$link)) //nombre de la base de datos ---

{
//echo "error seleccionando la base de datos.";
exit();
}





  $dep=@mysql_query("select * from asistentes where login='$user' and nip='$pass' and activo=1 limit 1" );
   $num=@mysql_num_rows ($dep);
   
  if ($num==1)
  { 
	$depp = @mysql_fetch_array($dep);
   @mysql_close($link);

 session_start(); 
 session_cache_limiter('nocache,private');
  $_SESSION['p_usu']=$depp['matricula'];
  $_SESSION['p_tipo']="asis";
  $_SESSION['p_nom']=$depp['nombre']." ".$depp['apellidos'];
	    
return "1";
  }
 
}




function error(){
return ('Error'.'<br>'.'Verifique con el Admnistrador' );
}
}

?>
