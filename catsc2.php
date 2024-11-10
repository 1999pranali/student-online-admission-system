<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Shri Swami Vivekanand Shikshan Sanstha',0,1,'C');
	$this->Cell(0,6,'Vivekanand College (Autonomous),Kolhapur',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}
include('connection.php');
ob_start();
$pdf=new PDF();
//$pdf1=new PDF();

$pdf->AddPage();
$pdf->SetY(30);
$pdf->SetX(60);
$pdf->Cell(0,0,'B.Sc-I General Merit List (PCMS)',0,0,'L',0);
$pdf->SetY(35);
$pdf->AddCol('regino',18,'Regi.No.');
$pdf->AddCol('Name',80,'Name');
$pdf->AddCol('castcat',15,'Caste');
$pdf->AddCol('percentage',25,'Percentage');
$pdf->AddCol('clgname',55,'Previous College');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(255,255,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
	$pdf->Table("select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and castcat='SC' and clgname='Other'  and subject='Physics,Chemistry,Maths,Statistics' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc;",$prop);
	
$pdf->Output();
//$pdf1->Output();

ob_end_flush();
?>
