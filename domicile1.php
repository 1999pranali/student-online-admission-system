<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$name=$_POST['domname'];
	$a="insert into domicile(domicile_name) values('$name');";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:domicile.php");

}
?>
