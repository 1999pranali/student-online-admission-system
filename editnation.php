<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['nid'];
	$newcname=$_POST['nname'];
	$a="update nationality set nation_name='$newcname' where nation_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:nation.php");

}
?>                                                                                    
