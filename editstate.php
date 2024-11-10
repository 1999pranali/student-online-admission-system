<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	
	$id1=$_POST['stateid'];
	$newcname=$_POST['statename'];
	$a="update state set state_name='$newcname' where state_id=$id1;";

	$result=mysqli_query($con,$a);

	/*if($result)
		echo "record inserted";
	else
		echo "record not inserted";*/
		header("location:state.php");

}
?>                                                                                    
