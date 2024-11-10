<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$cid=$_POST['cid'];
	$chk1=$_POST['chk'];
	$sid=implode(",",$chk1);
	//print_r($chk);
	//echo $cid;
	//echo $sid;

	$a="insert into group2(c_id,s_id) values('$cid','$sid');";

	$result=mysqli_query($con,$a);
	//if($result)
	//	echo "record inserted";
	//else
	//	echo "record not inserted";
	
		header("location:group.php");

}
?>
