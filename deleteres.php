<?php
include ("connection.php");

if(isset($_POST['btndelete']))
{
  $id1=$_POST['btndelete'];
	$a="delete from rescat where rcat_id=$id1;";

	$result=mysqli_query($con,$a);

	//if($result)
		//echo "record deleted";
		//else
		//echo "record not deleted";
  header("location:reservecat.php");

}
?>                                                                                    
