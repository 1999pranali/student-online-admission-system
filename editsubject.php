<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$subid=$_POST['sid'];
	$subname=$_POST['sname'];
	
	$a="update subject set s_name='$subname' where s_id=$subid;";

	$result=mysqli_query($con,$a);
/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
	
	header("location:subject.php");

}
?>
