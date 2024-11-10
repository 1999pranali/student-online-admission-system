<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$name=$_POST['cname'];
	$a="insert into course(c_name) values('$name');";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:course.php");

}
?>
