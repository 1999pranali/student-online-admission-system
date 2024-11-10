<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$a="insert into registration(uname,pass) values('$uname','$pass');";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:slogin.php");

}
?>
