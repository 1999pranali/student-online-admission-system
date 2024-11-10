
<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	if($uname=="vckadmin" && $pass=="vck@123")
	{
		header("location:index1.html");
	}
	else{
		header("location:ilogin.html");
	}

}
?>
