
<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
	$ename=$_POST['ename'];
	$board=$_POST['board'];
	$clgname=$_POST['clgname'];
	$radio1=$_POST['radio1'];
	$reason=$_POST['reason'];
	$examseat=$_POST['examseat'];
	$marks1=$_POST['marks1'];
	$marks2=$_POST['marks2'];
	$per=$_POST['per'];
	$passing=$_POST['passing'];
	// echo $ename;
	// echo $board;
	// echo $clgname;
	// echo $radio1;
	// echo $reason;
	// echo $examseat;
	// echo $marks1;
	// echo $marks2;
	// echo $per;
	// echo $passing;
	session_start();
	$a="insert into academic(ename,board,clgname,edugap,reason,examseat,tmark,outof,percentage,passingyear,r_id) values('$ename','$board','$clgname','$radio1','$reason','$examseat',$marks1,$marks2,$per,$passing,'$_SESSION[r_id]');";

	$result=mysqli_query($con,$a);

	// if($result)
	// 	echo "record inserted";
	// else
	// 	echo "record not inserted";
		header("location:cands.php");

}
?>
