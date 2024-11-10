<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$name=$_POST['nname'];
	$a="insert into nationality(nation_name) values('$name');";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:nation.php");

}
?>
