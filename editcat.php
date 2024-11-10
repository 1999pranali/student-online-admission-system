<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['catid'];
	$newcname=$_POST['catname'];
	$catquota=$_POST['catquota'];
	
	$a="update category set cat_name='$newcname' ,cat_quota=$catquota where cat_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:castcat.php");

}
?>                                                                                    
