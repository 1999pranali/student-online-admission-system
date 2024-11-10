<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$sid=$_POST['sid'];
	$seat=$_POST['seat'];
	$year=$_POST['a_year'];
	$cdate=$_POST['c_date'];
	$status='updated';
	$a="select s_id from nongrant where s_id='$sid';";
	$result=mysqli_query($con,$a);
	$rec=mysqli_num_rows($result);
	//echo $rec;
	if($rec>0){
	$a1="insert into nongrant(s_id,nseat,a_year,c_date,status) values('$sid',$seat,'$year','$cdate','$status');";
	$result1=mysqli_query($con,$a1);

  $q="select cat_name,cat_quota from category order by cat_name asc;";
            $res=mysqli_query($con,$q);
            $ca=array();
            
             while($rr=mysqli_fetch_array($res))
           {
            // echo $rr1[1]."<br>";
            // echo $rr1[3]."<br>";
            $s=($rr[1]*$seat)/100;
            array_push($ca, $s);
            //echo $ss1;
            
              }
              //print_r($cat);
              $quota="insert into npoint(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$sid','$ca[0]','$ca[1]','$ca[2]','$ca[3]','$ca[4]','$ca[5]','$ca[6]','$ca[7]','$ca[8]','$ca[9]');";
               $in=mysqli_query($con,$quota) or die(mysqli_error($con));


  $qq1="select cat_name,cat_quota from category order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
            $cat=array();
            
             while($rr1=mysqli_fetch_array($res1))
           {
            // echo $rr1[1]."<br>";
            // echo $rr1[3]."<br>";
            $s1=($rr1[1]*$seat)/100;
            $ss1=Round($s1);
            array_push($cat, $ss1);
            //echo $ss1;
            
              }
              //print_r($cat);
              $insertquota="insert into ntotal(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$sid','$cat[0]','$cat[1]','$cat[2]','$cat[3]','$cat[4]','$cat[5]','$cat[6]','$cat[7]','$cat[8]','$cat[9]');";
               $in1=mysqli_query($con,$insertquota) or die(mysqli_error($con));



               $qq1="select cat_name,cat_quota from category order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
     
             $catt=array();
              while($rr2=mysqli_fetch_array($res1))
           {
            // echo $rr1[1]."<br>";
            // echo $rr1[3]."<br>";
            $s2=($rr2[1]*$seat)/100;
            $ss1=Round($s2);
            $sss2=($ss1*80)/100;
            $ssss2=Round($sss2);
            array_push($catt, $ssss2);
            //echo $ss1;
            
              }
             // print_r($cat);
              $insertquota2="insert into nvck(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$sid','$catt[0]','$catt[1]','$catt[2]','$catt[3]','$catt[4]','$catt[5]','$catt[6]','$catt[7]','$catt[8]','$catt[9]');";
               $in2=mysqli_query($con,$insertquota2) or die(mysqli_error($con));

      $qq1="select cat_name,cat_quota from category order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
     
                $cat3=array();
                while($rr3=mysqli_fetch_array($res1))
           {
            $s3=($rr3[1]*$seat)/100;
            $ss3=Round($s3);
            $sss3= ($ss3*20)/100;
            $ssss3=Round($sss3);
            array_push($cat3, $ssss3);
            
              }
             
              $insertquota3="insert into nother(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$sid','$cat3[0]','$cat3[1]','$cat3[2]','$cat3[3]','$cat3[4]','$cat3[5]','$cat3[6]','$cat3[7]','$cat3[8]','$cat3[9]');";
               $in3=mysqli_query($con,$insertquota3) or die(mysqli_error($con));

	}
	else{
		$a1="insert into nongrant(s_id,nseat,a_year,c_date) values('$sid',$seat,'$year','$cdate');";
	$result1=mysqli_query($con,$a1);

          $q="select cat_name,cat_quota from category order by cat_name asc;";
            $res=mysqli_query($con,$q);
            $ca=array();
            
             while($rr=mysqli_fetch_array($res))
           {
            // echo $rr1[1]."<br>";
            // echo $rr1[3]."<br>";
            $s=($rr[1]*$seat)/100;
            array_push($ca, $s);
            //echo $ss1;
            
              }
              //print_r($cat);
              $quota="insert into npoint(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$sid','$ca[0]','$ca[1]','$ca[2]','$ca[3]','$ca[4]','$ca[5]','$ca[6]','$ca[7]','$ca[8]','$ca[9]');";
               $in=mysqli_query($con,$quota) or die(mysqli_error($con));




           $qq1="select cat_name,cat_quota from category order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
            $cat=array();
            
             while($rr1=mysqli_fetch_array($res1))
           {
            // echo $rr1[1]."<br>";
            // echo $rr1[3]."<br>";
            $s1=($rr1[1]*$seat)/100;
            $ss1=Round($s1);
            array_push($cat, $ss1);
            //echo $ss1;
            
              }
              //print_r($cat);
              $insertquota="insert into ntotal(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$sid','$cat[0]','$cat[1]','$cat[2]','$cat[3]','$cat[4]','$cat[5]','$cat[6]','$cat[7]','$cat[8]','$cat[9]');";
               $in1=mysqli_query($con,$insertquota) or die(mysqli_error($con));



               $qq1="select cat_name,cat_quota from category order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
     
             $catt=array();
              while($rr2=mysqli_fetch_array($res1))
           {
            // echo $rr1[1]."<br>";
            // echo $rr1[3]."<br>";
            $s2=($rr2[1]*$seat)/100;
            $ss1=Round($s2);
            $sss2=($ss1*80)/100;
            $ssss2=Round($sss2);
            array_push($catt, $ssss2);
            //echo $ss1;
            
              }
             // print_r($cat);
              $insertquota2="insert into nvck(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$sid','$catt[0]','$catt[1]','$catt[2]','$catt[3]','$catt[4]','$catt[5]','$catt[6]','$catt[7]','$catt[8]','$catt[9]');";
               $in2=mysqli_query($con,$insertquota2) or die(mysqli_error($con));

      $qq1="select cat_name,cat_quota from category order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
     
                $cat3=array();
                while($rr3=mysqli_fetch_array($res1))
           {
            $s3=($rr3[1]*$seat)/100;
            $ss3=Round($s3);
            $sss3= ($ss3*20)/100;
            $ssss3=Round($sss3);
            array_push($cat3, $ssss3);
            
              }
             
              $insertquota3="insert into nother(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$sid','$cat3[0]','$cat3[1]','$cat3[2]','$cat3[3]','$cat3[4]','$cat3[5]','$cat3[6]','$cat3[7]','$cat3[8]','$cat3[9]');";
               $in3=mysqli_query($con,$insertquota3) or die(mysqli_error($con));


	}	
	


header("location:nongrant.php");

}
?>


