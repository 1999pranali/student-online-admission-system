<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
}
ob_start();
$pdf=new PDF();
$pdf->AddPage();


	//Title
	$pdf->SetFont('Arial','',18);
	$pdf->Image('image/downloadlogo.jpeg',4,4,28,24);
	//$this->Ln(40);
	$pdf->Cell(0,6,'Shri. Swami Vivekanand Shikshan Sanstha',0,1,'C');
	$pdf->Cell(0,6,'VIVEKANAND COLLEGE (Autonomous),Kolhapur',0,1,'C');
	$pdf->Ln(10);
	//Ensure table header is output
	

include('connection.php');
 session_start();
// print_r($_SESSION);
//$pdf->AddPage();
//First table: put all columns automatically
$qq="select pinfo.r_id,regino, upper(concat (lname,' ',fname,' ',mname)) as Name,addinfo.r_id,academic.r_id,cands.r_id, castcat, percentage, edugap, subject,clgname,course,upper(fathername),upper(mothername),dob,gender,mbno,email,religion,subcast,upper(address),state,district,taluka,board,passingyear,tmark,
outof from pinfo, academic,cands ,addinfo where pinfo.r_id='$_SESSION[r_id]' and academic.r_id='$_SESSION[r_id]' and addinfo.r_id='$_SESSION[r_id]' and cands.r_id='$_SESSION[r_id]';";
	$qq1=mysqli_query($con,$qq);
	$qqq1=mysqli_fetch_row($qq1);
	//echo $qqq1[2];
//$pdf->Line($10,$10,$10,$10);
$pdf->SetFont('Arial','',12);
$pdf->Write(2,'______________________________________________________________________________');
$pdf->Ln(7);

$pdf->Write(5,'Registration Number:');
$pdf->Write(5,$qqq1[1]);
$pdf->Ln(7);
$pdf->Write(5,'Course Admitted To:');
$pdf->Write(5,$qqq1[11]);
$pdf->Write(5,'  ');
$pdf->Write(5,$qqq1[9]);
$pdf->Ln(7);
$pdf->Write(2,'______________________________________________________________________________');
$pdf->Ln(7);
$pdf->Write(5,'*  Personal Information:');
$pdf->Ln(4);
$pdf->Write(2,'___________________');
$pdf->Ln(7);

$pdf->Write(5,'Name of Student:');
$pdf->Write(5,$qqq1[2]);
$pdf->Ln(7);
$pdf->Write(5,"Father's Name:");
$pdf->Write(5,$qqq1[12]);
$pdf->Ln(7);
$pdf->Write(5,"Mother's Name:");
$pdf->Write(5,$qqq1[13]);
$pdf->Ln(7);
$pdf->Write(5,'Date of Birth:');
$pdf->Write(5,$qqq1[14]);
$pdf->Ln(7);
$pdf->Write(5,'Gender:');
$pdf->Write(5,$qqq1[15]);
$pdf->Ln(7);
$pdf->Write(5,'Mobile No.:');
$pdf->Write(5,$qqq1[16]);
$pdf->Ln(7);
$pdf->Write(5,"Email ID:");
$pdf->Write(5,$qqq1[17]);
$pdf->Ln(7);
$pdf->Write(5,"Religion:");
$pdf->Write(5,$qqq1[18]);
$pdf->Ln(7);
$pdf->Write(5,'Subcast:');
$pdf->Write(5,$qqq1[19]);
$pdf->Ln(7);
$pdf->Write(5,'Caste Category:');
$pdf->Write(5,$qqq1[6]);
$pdf->Ln(13);
$pdf->Write(5,'*  Address Details:');
$pdf->Ln(4);
$pdf->Write(2,'_________________');
$pdf->Ln(7);
$pdf->Write(5,'Address for Correspondence:');
$pdf->Write(5,$qqq1[20]);
$pdf->Ln(7);
$pdf->Write(5,"State:");
$pdf->Write(5,$qqq1[21]);
$pdf->Ln(7);
$pdf->Write(5,"District:");
$pdf->Write(5,$qqq1[22]);
$pdf->Ln(7);
$pdf->Write(5,"Tahsil:");
$pdf->Write(5,$qqq1[23]);
$pdf->Ln(13);
$pdf->Write(5,"*  Subject Details:");

$pdf->Ln(4);
$pdf->Write(2,'_________________');
$pdf->Ln(7);
$pdf->Write(5,"Subject Name:");
$pdf->Write(5,$qqq1[9]);
$pdf->Ln(13);
$pdf->Write(5,"*  Academic Details:");

$pdf->Ln(4);
$pdf->Write(2,'_________________');
$pdf->Ln(7);
$pdf->Write(5,'College Name:');
$pdf->Write(5,$qqq1[10]);
$pdf->Ln(7);
$pdf->Write(5,"Board Name:");
$pdf->Write(5,$qqq1[24]);
$pdf->Ln(7);
$pdf->Write(5,"Passing Year:");
$pdf->Write(5,$qqq1[25]);
$pdf->Ln(7);
$pdf->Write(5,"Total Marks:");
$pdf->Write(5,$qqq1[26]);
$pdf->Ln(7);
$pdf->Write(5,"Out of Marks:");
$pdf->Write(5,$qqq1[27]);
$pdf->Ln(7);
$pdf->Write(5,"Percentage:");
$pdf->Write(5,$qqq1[7]);
$pdf->Ln(7);
$pdf->Write(5,"Education Gap:");
$pdf->Write(5,$qqq1[8]);
$pdf->Ln(13);


$pdf->Write(5,"*  Declaration By Student:");

$pdf->Ln(4);
$pdf->Write(2,'_______________________');
$pdf->Ln(7);
$pdf->Write(5," I hereby declarecthat,I have read the rules related to admission and the information filled in by me in this form is accurate and true to the best of my knowledge.I will be responsible for any discrepancy,arising out of the form signed by me and undertake that,in absence of any document the final admission will not be granted and/or admission will stand cancel.");
$pdf->Ln(7);
$pdf->Write(5,"Place:");
$pdf->Ln(7);
$pdf->Write(5,"Date:                                                                                         Signature");
$pdf->Ln(15);
$pdf->Write(5,"*  Declaration By Parents:");

$pdf->Ln(4);
$pdf->Write(2,'_______________________');
$pdf->Ln(7);
$pdf->Write(5," I have permitted my son/daughter/ward to join your college. The information supllied by him/her is correct to the best of my knowledge. I have acquainted myself with the rules and fees,dues to my son/daughter/ward and see that he/she observe.");
$pdf->Ln(7);
$pdf->Write(5,"Place:");
$pdf->Ln(7);
$pdf->Write(5,"Date:                                                                                         Signature");
$pdf->Ln(13);
$pdf->Write(5,"Remark of the Admission committe:");
$pdf->Ln(4);
$pdf->Write(2,'__________________________________');
$pdf->Ln(7);
$pdf->Write(5,"Admitted to Class:");
$pdf->Write(5,"________________________________________");
$pdf->Ln(7);
$pdf->Write(5,"Remark:");
$pdf->Write(5,"________________________________________");
$pdf->Ln(25);
$pdf->Write(5,"                                                      Signature of admission committe");

	$pdf->Output();

ob_end_flush();
?>
