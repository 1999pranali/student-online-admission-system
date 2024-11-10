<?php
include('connection.php');
if(isset($_POST['btnsub']))
{

$ayear=$_POST['ayear'];
//$clg=$_POST['name'];
//echo $group;
//echo $clg;

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
ob_start();
$pdf=new PDF();
//$pdf1=new PDF();

$pdf->AddPage();
//First table: put all columns automatically

//$pdf->AddCol('regino',20,'Regi.No.');
$pdf->SetY(30);
$pdf->SetX(55);
$pdf->Write(5,'Admission Year:');
$pdf->Write(5,$_POST['ayear']);
$pdf->SetY(40);
$pdf->AddCol('regino',18,'Regi.No.');
$pdf->AddCol('Name',80,'Name');
$pdf->AddCol('castcat',15,'caste');
$pdf->AddCol('percentage',25,'Percentage');
$pdf->AddCol('clgname',55,'Previous College');
//$pdf->AddCol('ayear',20,'Admission Year');
// $pdf1->AddCol('Name',70,'Name');
// $pdf1->AddCol('castcat',20,'caste');
// $pdf1->AddCol('percentage',30,'Percentage');
// $pdf1->AddCol('clgname',60,'Previous College');

//$pdf->AddCol('pop',40,'Pop (2001)','R');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(255,255,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
//$pdf->AddPage();
//$pdf1->AddPage();

//	$pdf->Table("select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat2,g_name from pinfo, academic,cands,cat2,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat2.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit 1;",$prop);

	// $q="select cat2,g_name,subject from gvck,cands where g_name=subject;";
	// $qq=mysqli_query($con,$q) or die(mysqli_error($con));
	// $qqq=mysqli_fetch_array($qq);
	// $q1="select cat3,g_name,subject from gvck,cands where g_name=subject;";
	// $qq1=mysqli_query($con,$q1) or die(mysqli_error($con));
	// $qqq1=mysqli_fetch_array($qq1);
		
	
	$pdf->Table("select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname,ayear from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id  and ayear='$ayear' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc;",$prop);
	// $pdf1->Table("select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat3,g_name from pinfo, academic,cands,cat3,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat3.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $qqq1[0];",$prop);

$pdf->Output();

//$pdf1->Output();

ob_end_flush();



}
?>
