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
$pdf->Write(5,'First MeritList of Group (Nongrantable) :');
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
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(255,255,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
//$pdf->Line(10, 10, 20, 20);

	$q="select cat6,g_name from gvck where g_name='$group' ;";
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
 $c="select cat1,g_name from nvck where g_name='$group' ;";
                   $cc = mysqli_query($con,$c) or die(mysqli_error($con));
                  $ccc=mysqli_fetch_row($cc);
       $c1="select cat1,g_name from nother where g_name='$group' ;";
                   $cc1 = mysqli_query($con,$c1) or die(mysqli_error($con));
                  $ccc1=mysqli_fetch_row($cc1);
    
	 $c2="select cat1,g_name from gvck where g_name='$group' ;";
                   $cc2 = mysqli_query($con,$c2) or die(mysqli_error($con));
                  $ccc2=mysqli_fetch_row($cc2);
       $c3="select cat1,g_name from gother where g_name='$group' ;";
                   $cc3 = mysqli_query($con,$c3) or die(mysqli_error($con));
                  $ccc3=mysqli_fetch_row($cc3);
       $ntb="select cat2,g_name from nvck where g_name='$group' ;";
                   $ntbb = mysqli_query($con,$ntb) or die(mysqli_error($con));
                  $ntbbb=mysqli_fetch_row($ntbb);
       $ntb1="select cat2,g_name from nother where g_name='$group' ;";
                   $ntbb1 = mysqli_query($con,$ntb1) or die(mysqli_error($con));
                  $ntbbb1=mysqli_fetch_row($ntbb1);
      $ntb2="select cat2,g_name from gvck where g_name='$group' ;";
                   $ntbb2 = mysqli_query($con,$ntb2) or die(mysqli_error($con));
                  $ntbbb2=mysqli_fetch_row($ntbb2);
       $ntb3="select cat2,g_name from gother where g_name='$group' ;";
                   $ntbb3 = mysqli_query($con,$ntb3) or die(mysqli_error($con));
                  $ntbbb3=mysqli_fetch_row($ntbb3);
          $ntc="select cat3,g_name from nvck where g_name='$group' ;";
                   $ntcc = mysqli_query($con,$ntc) or die(mysqli_error($con));
                  $ntccc=mysqli_fetch_row($ntcc);
       $ntc1="select cat3,g_name from nother where g_name='$group' ;";
                   $ntcc1 = mysqli_query($con,$ntc1) or die(mysqli_error($con));
                  $ntccc1=mysqli_fetch_row($ntcc1);
         $ntc2="select cat3,g_name from gvck where g_name='$group' ;";
                   $ntcc2 = mysqli_query($con,$ntc2) or die(mysqli_error($con));
                  $ntccc2=mysqli_fetch_row($ntcc2);
       $ntc3="select cat3,g_name from gother where g_name='$group' ;";
                   $ntcc3 = mysqli_query($con,$ntc3) or die(mysqli_error($con));
                  $ntccc3=mysqli_fetch_row($ntcc3);
             $ntd="select cat4,g_name from nvck where g_name='$group' ;";
                   $ntdd = mysqli_query($con,$ntd) or die(mysqli_error($con));
                  $ntddd=mysqli_fetch_row($ntdd);
       $ntd1="select cat4,g_name from nother where g_name='$group' ;";
                   $ntdd1 = mysqli_query($con,$ntd1) or die(mysqli_error($con));
                  $ntddd1=mysqli_fetch_row($ntdd1);
         
           $ntd2="select cat4,g_name from gvck where g_name='$group' ;";
                   $ntdd2 = mysqli_query($con,$ntd2) or die(mysqli_error($con));
                  $ntddd2=mysqli_fetch_row($ntdd2);
       $ntd3="select cat4,g_name from gother where g_name='$group' ;";
                   $ntdd3 = mysqli_query($con,$ntd3) or die(mysqli_error($con));
                  $ntddd3=mysqli_fetch_row($ntdd3);
           $obc="select cat5,g_name from nvck where g_name='$group' ;";
                   $obcc = mysqli_query($con,$obc) or die(mysqli_error($con));
                  $obccc=mysqli_fetch_row($obcc);
       $obc1="select cat5,g_name from nother where g_name='$group' ;";
                   $obcc1 = mysqli_query($con,$obc1) or die(mysqli_error($con));
                  $obccc1=mysqli_fetch_row($obcc1);
         $obc2="select cat5,g_name from gvck where g_name='$group' ;";
                   $obcc2 = mysqli_query($con,$obc2) or die(mysqli_error($con));
                  $obccc2=mysqli_fetch_row($obcc2);
       $obc3="select cat5,g_name from gother where g_name='$group' ;";
                   $obcc3 = mysqli_query($con,$obc3) or die(mysqli_error($con));
                  $obccc3=mysqli_fetch_row($obcc3);
           $sc="select cat7,g_name from nvck where g_name='$group' ;";
                   $scc = mysqli_query($con,$sc) or die(mysqli_error($con));
                  $sccc=mysqli_fetch_row($scc);
       $sc1="select cat7,g_name from nother where g_name='$group' ;";
                   $scc1 = mysqli_query($con,$sc1) or die(mysqli_error($con));
                  $sccc1=mysqli_fetch_row($scc1);
         
         $sc2="select cat7,g_name from gvck where g_name='$group' ;";
                   $scc2 = mysqli_query($con,$sc2) or die(mysqli_error($con));
                  $sccc2=mysqli_fetch_row($scc2);
       $sc3="select cat7,g_name from gother where g_name='$group' ;";
                   $scc3 = mysqli_query($con,$sc3) or die(mysqli_error($con));
                  $sccc3=mysqli_fetch_row($scc3);
          $se="select cat8,g_name from nvck where g_name='$group' ;";
                   $see = mysqli_query($con,$se) or die(mysqli_error($con));
                  $seee=mysqli_fetch_row($see);
       $se1="select cat8,g_name from nother where g_name='$group' ;";
                   $see1 = mysqli_query($con,$se1) or die(mysqli_error($con));
                  $seee1=mysqli_fetch_row($see1);
         
         $se2="select cat8,g_name from gvck where g_name='$group' ;";
                   $see2 = mysqli_query($con,$se2) or die(mysqli_error($con));
                  $seee2=mysqli_fetch_row($see2);
       $se3="select cat8,g_name from gother where g_name='$group' ;";
                   $see3 = mysqli_query($con,$se3) or die(mysqli_error($con));
                  $seee3=mysqli_fetch_row($see3);
                  $st="select cat9,g_name from nvck where g_name='$group' ;";
                   $stt = mysqli_query($con,$st) or die(mysqli_error($con));
                  $sttt=mysqli_fetch_row($stt);
       $st1="select cat9,g_name from nother where g_name='$group' ;";
                   $stt1 = mysqli_query($con,$st1) or die(mysqli_error($con));
                  $sttt1=mysqli_fetch_row($stt1);
         
         $st2="select cat9,g_name from gvck where g_name='$group' ;";
                   $stt2 = mysqli_query($con,$st2) or die(mysqli_error($con));
                  $sttt2=mysqli_fetch_row($stt2);
       $st3="select cat9,g_name from gother where g_name='$group' ;";
                   $stt3 = mysqli_query($con,$st3) or die(mysqli_error($con));
                  $sttt3=mysqli_fetch_row($stt3);
                  $vj="select cat10,g_name from nvck where g_name='$group' ;";
                   $vjj = mysqli_query($con,$vj) or die(mysqli_error($con));
                  $vjjj=mysqli_fetch_row($vjj);
       $vj1="select cat10,g_name from nother where g_name='$group' ;";
                   $vjj1 = mysqli_query($con,$vj1) or die(mysqli_error($con));
                  $vjjj1=mysqli_fetch_row($vjj1);
         
         $vj2="select cat10,g_name from gvck where g_name='$group' ;";
                   $vjj2 = mysqli_query($con,$vj2) or die(mysqli_error($con));
                  $vjjj2=mysqli_fetch_row($vjj2);
       $vj3="select cat10,g_name from gother where g_name='$group' ;";
                   $vjj3 = mysqli_query($con,$vj3) or die(mysqli_error($con));
                  $vjjj3=mysqli_fetch_row($vjj3);
 
	     
$pdf->Table("(select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and subject='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc limit $qqq[0],$qqq1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and subject='$group' and clgname='Other' and cands.regino in(select regino from verify where status='verified') ORDER BY percentage desc limit $qqq2[0],$qqq3[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat1,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat1.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ccc2[0],$ccc[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat1,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat1.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ccc3[0],$ccc1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat2,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat2.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $ntbbb2[0],$ntbbb[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat2,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat2.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ntbbb3[0],$ntbbb1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat3,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat3.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $ntccc2[0],$ntccc[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat3,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat3.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ntccc3[0],$ntccc1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat4,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat4.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $ntddd2[0],$ntddd[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat4,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat4.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $ntddd3[0],$ntddd1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat5,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat5.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $obccc2[0],$obccc[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat5,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat5.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $obccc3[0],$obccc1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat7,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat7.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $sccc2[0],$sccc[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat7,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat7.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $sccc3[0],$sccc1[0])
	union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat8,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat8.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $seee2[0],$seee[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat8,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat8.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $seee3[0],$seee1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat9,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat9.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $sttt2[0],$sttt[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat9,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat9.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $sttt3[0],$sttt1[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat10,nvck where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat10.regino=cands.regino and subject='$group' and g_name='$group' and clgname='Vivekanand College,Kolhapur' and cands.regino in(select regino from verify where status='verified') and cands.regino not in($rr)  ORDER BY percentage desc limit $vjjj2[0],$vjjj[0]) union (select pinfo.r_id, cands.regino, upper(concat (lname,' ',fname,' ',mname)) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands,cat10,nother where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cat10.regino=cands.regino and subject='$group' and g_name='$group' and clgname='other' and cands.regino in(select regino from verify where status='verified')and cands.regino not in($rr)  ORDER BY percentage desc limit $vjjj3[0],$vjjj1[0]);",$prop); 
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
