<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['did'];
	$newcname=$_POST['dname'];
	$a="update district set district_name='$newcname' where district_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:district.php");

}
?>                                                                                    
