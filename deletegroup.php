<?php
include ("connection.php");

	$id = $_GET['id'];
  	$a="delete from group2 where s_id='$id';";

	$result=mysqli_query($con,$a);

	//if($result)
	//	echo "record deleted";
	//else
	//	echo "record not deleted";
  header("location:group.php");


?>                                                                                    
