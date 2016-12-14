<?php
function conectarse()
{

if(!($link=@mysql_connect("127.0.0.1","cozcyt_flxsl16","fl16lAb_*1")))
{
echo "error conectando a la base de datos.";
exit();
}
if (!@mysql_select_db("cozcyt_labsolfl16",$link)) //nombre de la base de datos ---

{
echo "error seleccionando la base de datos.";
exit();
}
return $link;
} 
$link=conectarse();

@mysql_close($link); //cierra la conexion
?>

