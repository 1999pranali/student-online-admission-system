<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['rid'];
	$newcname=$_POST['rname'];
	$a="update religions set r_name='$newcname' where r_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:religion.php");

}
?>                                                                                    
