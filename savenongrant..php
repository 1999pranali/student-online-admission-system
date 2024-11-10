<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$sid=$_POST['sid'];
	$seat=$_POST['seat'];
	$a="insert into nongrant(s_id,nseat) values('$sid',$seat);";

	$result=mysqli_query($con,$a);
		header("location:nongrant.php");

}
?>


<!-- <?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$sid=$_POST['sid'];
	$seat=$_POST['seat'];
	$year=$_POST['a_year'];
	$cdate=$_POST['c_date'];
	$status='updated';
	$a="select s_id from ggrant where s_id='$sid';";
	$result=mysqli_query($con,$a);
	$rec=mysqli_num_rows($result);
	//echo $rec;
	if($rec>0){
	$a1="insert into ggrant(s_id,seat,ga_year,gc_date,gstatus) values('$sid',$seat,'$year','$cdate','$status');";
	$result1=mysqli_query($con,$a1);

              $qq1="select cat_name,cat_quota,s_id,seat from category,ggrant order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
            $catquota=array();
               
            $rr2=mysqli_fetch_row($res1);
             while($rr1=mysqli_fetch_row($res1))
           {
            $s1=$rr1[1]*$rr1[3]/100;
              $ss1=Round($s1);
                array_push($catquota, $ss1);
         
              }

         // $q1="select s_id,max(gtime) from ggrant group by s_id desc ;";
         //    $result1=mysqli_query($con,$q1);
         //     while($r1=mysqli_fetch_row($result1))
         //   {
            

         //        $q="select cat_name,cat_quota,s_id,seat from ggrant where s_id='$r1[0]' and gtime='$r1[1]' ;";
         //        $res1=mysqli_query($con,$q);
         //    $catquota=array();
               

         //     while($rr1=mysqli_fetch_row($res1))
         //   {
         //    $s1=$rr1[1]*$rr1[3]/100;
         //      $ss1=Round($s1);
         //        array_push($catquota, $ss1);
         
         //      }

         //       } 
                



	$insertquota="insert into gtotal(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$rr2[2]','$catquota[0]','$catquota[1]','$catquota[2]','$catquota[3]','$catquota[4]','$catquota[5]','$catquota[6]','$catquota[7]','$catquota[8]',
               '$catquota[9]') ;";
              $in1=mysqli_query($con,$insertquota) or die(mysqli_error($con));


              
          
	}
	else{
		$a1="insert into ggrant(s_id,seat,ga_year,gc_date) values('$sid',$seat,'$year','$cdate');";
	$result1=mysqli_query($con,$a1);

              $qq1="select cat_name,cat_quota,s_id,seat from category,ggrant order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
            $catquota=array();
               
			$rr2=mysqli_fetch_row($res1);
             while($rr1=mysqli_fetch_row($res1))
           {
            $s1=$rr1[1]*$rr1[3]/100;
              $ss1=Round($s1);
                array_push($catquota, $ss1);
         
              }
// 	 $q1="select s_id,max(gtime) from ggrant group by s_id desc ;";
//             $result1=mysqli_query($con,$q1);
//              while($r1=mysqli_fetch_row($result1))
//            {
            

//                 $q="select cat_name,cat_quota,s_id,seat from ggrant where s_id='$r1[0]' and gtime='$r1[1]' ;";
//                 $res1=mysqli_query($con,$q);
//             $catquota=array();
               

//              while($rr1=mysqli_fetch_row($res1))
//            {
//             $s1=$rr1[1]*$rr1[3]/100;
//               $ss1=Round($s1);
//                 array_push($catquota, $ss1);
         
//               }

                
              
// }
         


	$insertquota="insert into gtotal(g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10) values('$rr2[2]','$catquota[0]','$catquota[1]','$catquota[2]','$catquota[3]','$catquota[4]','$catquota[5]','$catquota[6]','$catquota[7]','$catquota[8]','$catquota[9]') ;";
              $in1=mysqli_query($con,$insertquota) or die(mysqli_error($con));
              // echo $catquota[0]."<br>";
              // echo $catquota[1]."<br>";
              // echo $catquota[2]."<br>";
              // echo $catquota[3]."<br>";
              // echo $catquota[4]."<br>";
              // echo $catquota[5]."<br>";
              // echo $catquota[6]."<br>";
              // echo $catquota[7]."<br>";
              // echo $catquota[8]."<br>";
              // echo $catquota[9]."<br>";
              
}

//header("location:grant.php");

}
?>
 -->