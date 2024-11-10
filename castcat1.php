<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$name=$_POST['catname'];
	$catquota=$_POST['catquota'];
	$a="insert into category(cat_name,cat_quota) values('$name',$catquota);";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:castcat.php");

}
?>
