<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Book Categories',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}
include('connection.php');
ob_start();
$pdf=new PDF();
//$pdf->AddPage();
//First table: put all columns automatically

$pdf->AddPage();

$pdf->AddCol('id',20,'Book Id');
$pdf->AddCol('cat_name',40,'Book Name');
//$pdf->AddCol('pop',40,'Pop (2001)','R');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(255,255,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select id, cat_name  from category order by id ;',$prop);
$pdf->Output();
ob_end_flush();
?>
