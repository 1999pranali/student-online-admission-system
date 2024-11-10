<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$cid=$_POST['cid'];
	$subcname=$_POST['sname'];
	$a="insert into subject(s_name,c_id) values('$subcname',$cid);";

	$result=mysqli_query($con,$a);
		header("location:subject.php");

}
?>
