<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['tid'];
	$newcname=$_POST['tname'];
	$a="update taluka set t_name='$newcname' where t_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:taluka.php");

}
?>                                                                                    
