<?php
include ("connection.php");

if(isset($_POST['btndelete']))
{
  $id=$_POST['btndelete'];
 
	$a="delete from subject where s_id=$id;";

	$result=mysqli_query($con,$a);

	//if($result)
		//echo "record deleted";
//else
		//echo "record not deleted";
  header("location:subject.php");

}
?>                                                                                    
