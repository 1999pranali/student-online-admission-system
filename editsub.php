<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['sid'];
	$newcname=$_POST['subname'];
	$a="update subcat set scat_name='$newcname' where scat_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:subcast.php");

}
?>                                                                                    
