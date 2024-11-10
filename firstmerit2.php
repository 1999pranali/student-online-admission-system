<?php
if(isset($_POST['btnsub']))
{

$group=$_POST['sid'];

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
//$pdf1->AddPage();


//First table: put all columns automatically

$pdf->SetY(25);
$pdf->SetX(60);
$pdf->Write(5,'First MeritList of Group (Grantable) :');
$pdf->SetY(35);
$pdf->SetX(60);

$pdf->Write(5,$_POST['sid']);
$pdf->SetY(48);
$pdf->Write(0,'Date:');
$pdf->SetX(27);

 $pdf->Cell(0, 0, date("d/m/Y"), 0, false, ' ', 0, '', 0, false, 'T', 'M');  
$pdf->SetY(55);
$pdf->AddCol('regino',18,'Regi.No.');
$pdf->AddCol('Name',80,'Name');
$pdf->AddCol('castcat',15,'caste');
$pdf->AddCol('percentage',25,'Percentage');
$pdf->AddCol('clgname',55,'Previous College');
// $pdf1->AddCol('regino',18,'Regi.No.');
// $pdf1->AddCol('Name',80,'Name');
// $pdf1->AddCol('castcat',15,'caste');
// $pdf1->AddCol('percentage',25,'Percentage');
// $pdf1->AddCol('clgname',55,'Previous College');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(255,255,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
// $prop1=array('HeaderColor'=>array(255,150,100),
// 			'color1'=>array(255,255,255),
// 			'color2'=>array(255,255,210),
// 			'padding'=>2);

//$pdf->Line(10, 10, 20, 20);

	$q="select cat6,g_name from gvck where g_name='$group';";
	$qq=mysqli_query($con,$q) or die(mysqli_error($con));
	$qqq=mysqli_fetch_array($qq);
	 $q1="select cat6,g_name from nvck where g_name='$group' ;";
	 $qq1=mysqli_query($con,$q1) or die(mysqli_error($con));
	 $qqq1=mysqli_fetch_array($qq1);
	 $q2="select cat6,g_name from gother where g_name='$group' ;";
	$qq2=mysqli_query($con,$q2) or die(mysqli_error($con));
	$qqq2=mysqli_fetch_array($qq2);
	 $q3="select cat6,g_name from nother where g_name='$group' ;";
	 $qq3=mysqli_query($con,$q3) or die(mysqli_error($con));
	 $qqq3=mysqli_fetch_array($qq3);
	
	$p="select  cands.regino, pinfo.r_id,upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and subject='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc limit $qqq[0];";
	$pp=mysqli_query($con,$p) or die(mysqli_error($con));
	$re=array();
	while($ppp=mysqli_fetch_row($pp))
	{
		$pr=$ppp[0];
		array_push($re, $pr);
	}
	
	
	$p1="select  cands.regino, pinfo.r_id,upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and subject='$group' and clgname='Other' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc limit $qqq2[0];";
	$pp1=mysqli_query($con,$p1) or die(mysqli_error($con));
	//$re1=array();
	while($ppp1=mysqli_fetch_row($pp1))
	{
		$pr1=$ppp1[0];
		array_push($re, $pr1);
	}
	$p2="select  cands.regino, pinfo.r_id,upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and subject='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc limit $qqq[0],$qqq1[0];";
	$pp2=mysqli_query($con,$p2) or die(mysqli_error($con));
	while($ppp2=mysqli_fetch_row($pp2))
	{
		$pr3=$ppp2[0];
		array_push($re, $pr3);
	}
	
	
	$p3="select  cands.regino, pinfo.r_id,upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and subject='$group' and clgname='Other' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc limit $qqq2[0],
	$qqq3[0];";
	$pp3=mysqli_query($con,$p3) or die(mysqli_error($con));
	//$re1=array();
	while($ppp3=mysqli_fetch_row($pp3))
	{
		$pr4=$ppp3[0];
		array_push($re, $pr4);
	}
//print_r($re);
	$rr=implode(',',$re);
	//echo $rr;
	 $c="select cat1,g_name from gvck where g_name='$group' ;";
                   $cc = mysqli_query($con,$c) or die(mysqli_error($con));
                  $ccc=mysqli_fetch_row($cc);
       $c1="select cat1,g_name from gother where g_name='$group' ;";
                   $cc1 = mysqli_query($con,$c1) or die(mysqli_error($con));
                  $ccc1=mysqli_fetch_row($cc1);
      $ntb="select cat2,g_name from gvck where g_name='$group' ;";
                   $ntbb = mysqli_query($con,$ntb) or die(mysqli_error($con));
                  $ntbbb=mysqli_fetch_row($ntbb);
       $ntb1="select cat2,g_name from gother where g_name='$group' ;";
                   $ntbb1 = mysqli_query($con,$ntb1) or die(mysqli_error($con));
                  $ntbbb1=mysqli_fetch_row($ntbb1);
         $ntc="select cat3,g_name from gvck where g_name='$group' ;";
                   $ntcc = mysqli_query($con,$ntc) or die(mysqli_error($con));
                  $ntccc=mysqli_fetch_row($ntcc);
       $ntc1="select cat3,g_name from gother where g_name='$group' ;";
                   $ntcc1 = mysqli_query($con,$ntc1) or die(mysqli_error($con));
                  $ntccc1=mysqli_fetch_row($ntcc1);
           $ntd="select cat4,g_name from gvck where g_name='$group' ;";
                   $ntdd = mysqli_query($con,$ntd) or die(mysqli_error($con));
                  $ntddd=mysqli_fetch_row($ntdd);
       $ntd1="select cat4,g_name from gother where g_name='$group' ;";
                   $ntdd1 = mysqli_query($con,$ntd1) or die(mysqli_error($con));
                  $ntddd1=mysqli_fetch_row($ntdd1);
         $obc="select cat5,g_name from gvck where g_name='$group' ;";
                   $obcc = mysqli_query($con,$obc) or die(mysqli_error($con));
                  $obccc=mysqli_fetch_row($obcc);
       $obc1="select cat5,g_name from gother where g_name='$group' ;";
                   $obcc1 = mysqli_query($con,$obc1) or die(mysqli_error($con));
                  $obccc1=mysqli_fetch_row($obcc1);
         $sc="select cat7,g_name from gvck where g_name='$group' ;";
                   $scc = mysqli_query($con,$sc) or die(mysqli_error($con));
                  $sccc=mysqli_fetch_row($scc);
       $sc1="select cat7,g_name from gother where g_name='$group' ;";
                   $scc1 = mysqli_query($con,$sc1) or die(mysqli_error($con));
                  $sccc1=mysqli_fetch_row($scc1);
         $se="select cat8,g_name from gvck where g_name='$group' ;";
                   $see = mysqli_query($con,$se) or die(mysqli_error($con));
                  $seee=mysqli_fetch_row($see);
       $se1="select cat8,g_name from gother where g_name='$group' ;";
                   $see1 = mysqli_query($con,$se1) or die(mysqli_error($con));
                  $seee1=mysqli_fetch_row($see1);
         $st="select cat9,g_name from gvck where g_name='$group' ;";
                   $stt = mysqli_query($con,$st) or die(mysqli_error($con));
                  $sttt=mysqli_fetch_row($stt);
       $st1="select cat9,g_name from gother where g_name='$group' ;";
                   $stt1 = mysqli_query($con,$st1) or die(mysqli_error($con));
                  $sttt1=mysqli_fetch_row($stt1);
         $vj="select cat10,g_name from gvck where g_name='$group' ;";
                   $vjj = mysqli_query($con,$vj) or die(mysqli_error($con));
                  $vjjj=mysqli_fetch_row($vjj);
       $vj1="select cat10,g_name from gother where g_name='$group' ;";
                   $vjj1 = mysqli_query($con,$vj1) or die(mysqli_error($con));
                  $vjjj1=mysqli_fetch_row($vjj1);

$pdf->Table("(select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and subject='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc limit $qqq[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and subject='$group' and clgname='Other' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc limit $qqq2[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat1,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat1.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ccc[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat1,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat1.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ccc1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat2,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat2.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $ntbbb[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat2,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat2.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ntbbb1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat3,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat3.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $ntccc[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat3,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat3.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit 
	$ntccc1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat4,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat4.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $ntddd[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat4,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat4.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ntddd1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat5,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat5.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $obccc[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat5,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat5.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $obccc1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat7,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat7.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $sccc[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat7,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat7.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $sccc1[0])
	union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat8,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat8.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $seee[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat8,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat8.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $seee1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat9,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat9.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $sttt[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat9,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat9.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $sttt1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat10,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat10.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $vjjj[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat10,gother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat10.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $vjjj1[0]);",$prop); 
 // $pdf1->Table1("select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat3,gvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat3.regino=cands.regino and subject='Physics,Chemistry,Maths,Statistics' and g_name='Physics,Chemistry,Maths,Statistics' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified')
// and cands.regino not in($rr)  ORDER BY percentage desc limit $ccc[0];",$prop);
// select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' '
// ,mname)) as Name, castcat, percentage, edugap, subject,clgname,cat2.regino,g_nam
// e from pinfo, academic,cands,cat2,gvck where edugap='No' and pinfo.r_id=academic
// .r_id and academic.r_id = cands.r_id and cat2.regino=cands.regino and subject='P
// hysics,Chemistry,Maths,Statistics' and g_name='Physics,Chemistry,Maths,Statistic
// s' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino f
// rom verify where status='verified') and cands.regino not in(10421,84800,32459,85
// 329,79688,71202,94302,83672,16830,53118,76754,68883,59168,64307,32419,17192,8264
// 5,88165,66531,82895,97989) ORDER BY percentage desc limit 2;
//select g_name,cat2.regino,castcat,clgname from gvck,cat2,cands,academic,pinfo where g_name='$r[6]' and cat2.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $ccc[0]
	 // $pdf->Table("select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat3,g_name from pinfo, academic,cands,cat3,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat3.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $qqq1[0];",$prop);

 $pdf->Output();
//$pdf1->Output();


ob_end_flush();
}
?>
