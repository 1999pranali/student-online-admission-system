<?php
include ("connection.php");
session_start();
if(isset($_POST['btnsub']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$regi=rand(10000,100000);
	$a1="select uname,pass,r_id from registration where uname='$username' and pass='$password';";
	$result1=mysqli_query($con,$a1);
    while($r=mysqli_fetch_array($result1))
    {
        
         	//echo $r[0];
	//echo $r[1];
      //  print_r($_SESSION);
	if($username==$r[0] && $password==$r[1])
	{
	//$a="insert into signin(username,password,r_id) values('$username','$password','$_SESSION[r_id]');";
    $_SESSION['r_id']=$r[2];
    $_SESSION['uname']=$r[0]; 
	//$result=mysqli_query($con,$a);
	
	// echo $regi;
	// echo $username;
	// echo $password;
	// $a2="insert into studinfo(r_no,username,password) values($regi,'$username','$password');";

	// $result2=mysqli_query($con,$a2);
	

	// if($result)
	// 	echo "record inserted";
	// else
	// 	echo "record not inserted";
	header("location:index2.php");
    }
	}
		
			echo "username and password is not registered";
		
	}

?>
