<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$sid=$_POST['gid'];
	$seat=$_POST['seat'];
	$year=$_POST['a_year'];
	$cdate=$_POST['c_date'];
	
	$a="update nongrant set nseat=$seat,a_year='$year',c_date='$cdate' where ngrant_id=$sid;";

	$result=mysqli_query($con,$a);
/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
	
	header("location:nongrant.php");

}
?>
