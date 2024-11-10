<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['tid'];
	$newcname=$_POST['tname'];
	$a="update rescat set rcat_name='$newcname' where rcat_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:reservecat.php");

}
?>                                                                                    
