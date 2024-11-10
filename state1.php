<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$name=$_POST['statename'];
	$a="insert into state(state_name) values('$name');";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:state.php");

}
?>
