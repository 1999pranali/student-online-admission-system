<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$address=$_POST['address'];
	$district=$_POST['district'];
	$taluka=$_POST['taluka'];
	$state=$_POST['state'];
	$pcode=$_POST['pcode'];
	session_start();
	$a="insert into addinfo(address,district,taluka,state,pcode,r_id) values('$address','$district','$taluka','$state','$pcode','$_SESSION[r_id]');";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:academic.php");

}
?>
