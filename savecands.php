<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$course=$_POST['course'];
	$chk=$_POST['chk'];
    $regi=rand(10000,100000);

	//echo $chk;
	$sub1="select c_name from course where course.c_id=$course;";
        $rr1=mysqli_query($con,$sub1);
        $rrr1=mysqli_fetch_row($rr1);
        $course1= $rrr1[0];

         $que="select s_id from group2 where group2.s_id='$chk';";
            $res=mysqli_query($con,$que) or die(mysqli_error($con));
            $r=mysqli_fetch_row($res);
               //echo $r[0];
                 $arr=explode(',', $r[0]);
                 $cat=array();
                 foreach($arr as $i) 
          {
            $sub="select s_name from subject where s_id=$i;";
            $rr=mysqli_query($con,$sub);
            $rrr=mysqli_fetch_row($rr);
            array_push($cat,$rrr[0]);
        }
        $subject1=implode(",",$cat);
        
        echo $course1;
        //print_r($cat);
        echo $subject1;
        //echo $subject1;
        session_start();
         $sub="insert into cands(course,subject,regino,r_id) values('$course1','$subject1','$regi','$_SESSION[r_id]');";

	$subb=mysqli_query($con,$sub);
	      header("location:studform.php"); 
		//header("location:cands.php");

}
?>
