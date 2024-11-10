<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['cid'];
	$newcname=$_POST['cname'];
	$a="update course set c_name='$newcname' where c_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:course.php");

}
?>                                                                                    
