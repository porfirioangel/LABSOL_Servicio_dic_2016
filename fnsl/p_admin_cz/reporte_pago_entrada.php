<?php session_start();
session_cache_limiter('nocache,private');

//include("out.php");

$p_usuario=$_SESSION['p_usua'];
 $p_nombre=$_SESSION['p_noma'];
 $p_tipo=$_SESSION['p_tipoa'];
 
 
 
if ($p_usuario!="" and $p_nombre!="" and $p_tipo=="admin"  )
{
	function fechanueva($fechavieja){
	
	if ($fechavieja!="0000-00-00"){
		
    list($a,$m,$d)=explode("-",$fechavieja);
    return $d."/".$m."/".$a;
	}else{
		return "No hay";
		}}


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
require('fpdf.php');
//$link=conectarse();

$tl=$_POST['cbo_nive'];






class PDF extends FPDF
{ 

	
	
//Cabecera de p�gina
function Header()
{global $link, $tl;
$this->SetMargins(3,3);
$this->SetFont('Arial','B',14);
////////////////Logos//////////////////////////////////////////////
//$this->Image('../images/dicre.jpg',10,10,30,25);
$this->Text(90,15,'Foro Nacional de Software Libre');


$this->SetXY(3,20);

$this->MultiCell(291,5,("Reporte de Pagos LABSOL & Campus Party, Zacatecas 2015."),0,C,0);



//$this->Text(130,31,'De: '.substr($fecha_m,8,2).'/'.substr($fecha_m,5,2).'/'.substr($fecha_m,0,4) );

//$link=conectarse();

//$this->Text(115,45,'CURRICULUM DE LA EMPRESA');

$this->SetFont('Arial','B',8);
$X=3;
$Y=30;


$this->SetXY($X,$Y);
$this->Cell(13,5,'Matricula',1,0,'C');
$this->Cell(65,5,'Nombre',1,0,'C');
$this->Cell(55,5,'Correo',1,0,'C');
$this->Cell(50,5,'Forma de Pago',1,0,'C');

$this->Cell(20,5,'Costo',1,0,'C');

$this->Cell(70,5,'Folio',1,0,'C');
$this->Cell(17,5,'Fecha ',1,0,'C');


//$this->Cell(36,5,'Importe Ejercido',1,0,'C');

$X=30;
$Y=30;


$this->SetXY($X,$Y);



	//Logo
//	$this->Image('sec1.jpg',10,8,33);
	//Arial bold 15
//	$this->SetFont('Arial','B',15);
	//Movernos a la derecha
//	$this->Cell(80);
	//T�tulo
//	$this->Cell(30,10,'Title',1,0,'C');
	//Salto de l�nea
	$this->Ln(5);
}

//Pie de p�gina
function Footer()
{
	//Posici�n: a 1,5 cm del final
	$this->SetY(-15);
	//Arial italic 8
	$this->SetFont('Arial','I',8);
	//N�mero de p�gina
	$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	$this->SetY(-15);
	$this->Cell(50,5,'Fecha de Impresion: '.date('d/m/Y'),0,0,'C');
	//date('Y/m/d')
}
}


//Creaci�n del objeto de la clase heredada
$pdf=new PDF('L');
//$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);




$pdf->SetFont('Arial','',8);


///////////////////






$pdf->SetWidths(array(13,65,55,50,20,70,17));


	
$resu="Select * From asistentes Inner join pagos on asistentes.matricula=pagos.matricula where pagos.pago='Participación en el CISOL' order by  pagos.forma_pago asc" ; 


				

$result1a=mysql_query($resu,$link);
$nn=mysql_num_rows($result1a);
while($row = mysql_fetch_array($result1a))

	{

	$pdf->Row(array($row["matricula"],utf8_decode(ucwords(strtolower($row["apellidos"]))).' '.utf8_decode(ucwords(strtolower($row["nombre"]))),$row["email"],utf8_decode(ucwords(strtolower($row["forma_pago"]))),$row["costo"],utf8_decode(ucwords(strtolower($row["folio"]))),fechanueva(substr($row['fecha'],0,10))));
	
	}
	
	



$result1=mysql_query("SELECT matricula, forma_pago, costo, count( * ) AS Repetido
FROM pagos AS Tmp where pago='Participación en el CISOL'
GROUP BY matricula
HAVING Count( * ) >1",$link);

 $pdf->AddPage();
   $X=3;
$Y=50;
$pdf->SetFont('Arial','I',10);

$pdf->SetXY($X,$Y);
while($row1 = mysql_fetch_array($result1))

	{
$pdf->MultiCell(291,5,"Matricula: ".$row1['matricula'].", Repetido: ".$row1['Repetido'].", Forma de Pago: ".$row1['forma_pago'].", Costo: ".$row1['costo'],0,C	,0);
	}
   
  


    $pdf->Text(40,60,'Numero de Pagos: '.$nn);
	
	
	  $pdf->Text(135,45,'Repetidos');
	  
	   $pdf->Text(40,70,'Formas de Pago');
	   
	   $result2=mysql_query("SELECT sum(costo) as bb from pagos where pago='Participación en el CISOL' and forma_pago='Beca'",$link);
	   $row2 = mysql_fetch_array($result2);
	   $pdf->Text(40,75,'Pago en Becas: '.number_format($row2['bb'],2));
	   $result2=mysql_query("SELECT sum(costo) as bb from pagos where pago='Participación en el CISOL' and forma_pago='Cortesia'",$link);
	   $row2 = mysql_fetch_array($result2);
	   $pdf->Text(40,80,'Pago en Cortesias: '.number_format($row2['bb'],2));
	   $result2=mysql_query("SELECT sum(costo) as bb from pagos where pago='Participación en el CISOL' and forma_pago='Deposito'",$link);
	   $row2 = mysql_fetch_array($result2);
	   $pdf->Text(40,85,'Pago en Depositos: '.number_format($row2['bb'],2));
	   $result2=mysql_query("SELECT sum(costo) as bb from pagos where pago='Participación en el CISOL' and forma_pago='Efectivo'",$link);
	   $row2 = mysql_fetch_array($result2);
	   $pdf->Text(40,90,'Pago en Efectivo: '.number_format($row2['bb'],2));
	


$pdf->Output();
?>
<?php
}else{

header("Location: denegado.php");
}



?>
