<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

$p_usuario=$_SESSION['p_usu'];
 $p_nombre=$_SESSION['p_nom'];
 $p_tipo=$_SESSION['p_tipo'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="asis"  )
{
require('fpdf.php');

class PDF extends FPDF
{
//Cabecera de página
function Header()
{
	//Logo
	$this->Image('con2.jpg',0,0,300,217);
	//Arial bold 15
	$this->SetFont('Arial','B',15);
	//Movernos a la derecha
	//$this->Cell(80);
	//Título
//	$this->Cell(30,10,'Title',1,0,'C');	
	//Salto de línea
//	$this->Ln(20);
}

//Pie de página
function Footer()
{
	//Posición: a 1,5 cm del final
	//$this->SetY(-15);
	//Arial italic 8
//	$this->SetFont('Arial','I',8);
	//Número de página
	//$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
if(!($link=@mysql_connect("mysql51-119.wc1.ord1.stabletransit.com","901909_r0oo_tIng","R0eo_gF7l*/.|")))
{
echo "error conectando a la base de datos.";
exit();
}
if (!@mysql_select_db("901909_reg_flisolzac",$link)) //nombre de la base de datos ---

{
echo "error seleccionando la base de datos.";
exit();
}


//$q="SELECT * FROM remitente where nom_rem='$rem'";
//$result=mysql_query($q,$link);
//$row = mysql_fetch_array($result);
//$rem=$row['id_remitente'];


//Creación del objeto de la clase heredada
$pdf=new PDF('L');






$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(114, 47, 55);
$pdf->SetXY(113,108);
$p_usuario=$_SESSION['p_usu'];



mysql_query("insert into constancias values ('',".$p_usuario.",1,".$p_usuario.",'".date("Y-m-d h:m:s")."','".$_SERVER['REMOTE_ADDR']."' )",$link);

$p_usuario=$_SESSION['p_usu'];
 $query="select * from asistentes where asistentes.activo=1 and asistentes.matricula=".$p_usuario." limit 1";

 
$result=mysql_query($query,$link);
/* $nn= mysql_num_rows($result);
 if ($nn==0){
	 header("Location: no_participacion.php");

	
	 }*/
$row=mysql_fetch_array($result);
$pdf->MultiCell(148,15,"".ucwords(strtolower( utf8_decode($row['nombre']." ".$row['apellidos']))),0,C,0);




//$pdf->Output();
$pdf->Output("FLISOL-2014-".$row['matricula'].".pdf", "D");


}else{

header("Location: denegado.php");
}



?>
