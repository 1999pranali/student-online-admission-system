<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];

	$a1="select uname,pass from registration where uname='$uname' and pass='$pass';";
	$result1=mysqli_query($con,$a1);
    $k=$r=mysqli_num_rows($result1);
    if($k>0){
    	echo"username and password is exist.Create another username and password";
       
	}
	else{
	$a="insert into registration(uname,pass) values('$uname','$pass');";
     
	$result=mysqli_query($con,$a);
	
		header("location:slogin.php");
	}
}

?>
