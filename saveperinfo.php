<?php
include ("connection.php");

if(isset($_POST['btnsub']))
{
  $ayear=$_POST['ayear'];
  $title=$_POST['title'];
  
  $lname=$_POST['lname'];
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $gender=$_POST['gender'];
  $mbno=$_POST['mbno'];
  $email=$_POST['email'];
  $dob=$_POST['dob'];
  $faname=$_POST['faname'];
  $moname=$_POST['moname'];
  $religion=$_POST['religion'];
  $subcast=$_POST['subcast'];
  $cat=$_POST['cat'];
  $nation=$_POST['nation'];
  $dname=$_POST['dname'];
  // echo $lname;
  // echo $fname;
  // echo $mname;
  // echo $gender;
  // echo $mbno;
  // echo $email;
  // echo $dob;
  // echo $faname;
  // echo $moname;
  // echo $religion;
  // echo $subcast;
  // echo $cat;
  // echo $nation;

 // echo $dname;
session_start();
//print_r($_SESSION);
  $a="insert into pinfo(lname,fname,mname,gender,mbno,email,dob,fathername,mothername,religion,subcast,castcat,nation,domicile,ayear,title,r_id) values('$lname','$fname','$mname','$gender','$mbno','$email','$dob','$faname','$moname','$religion','$subcast','$cat','$nation','$dname','$ayear','$title','$_SESSION[r_id]');";

  $result=mysqli_query($con,$a);

  // if($result)
  //   echo "record inserted";
  // else
  //   echo "record not inserted";
   header("location:address.php");

}

?>