<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$name=$_POST['tname'];
	$a="insert into rescat(rcat_name) values('$name');";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:reservecat.php");

}
?>