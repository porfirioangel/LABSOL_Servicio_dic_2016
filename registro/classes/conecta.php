<?php
function conectarse()
{

if(!($link=@mysql_connect("127.0.0.1","cozcyt_labreg","L465o1reg.|*_")))
{
echo "Error conectando a la base de datos.";
exit();
}
//if (!mysql_select_db("prueba01",$link)) //nombre de la base de datos --- 
if (!mysql_select_db("cozcyt_registrolabsol",$link))
{
echo "Error seleccionando la base de datos.";
exit();	
}
return $link;
} //func. Conectarse
?>
