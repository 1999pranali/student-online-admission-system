<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['domid'];
	$newcname=$_POST['domname'];
	$a="update domicile set domicile_name='$newcname' where domicile_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:domicile.php");

}
?>                                                                                    
