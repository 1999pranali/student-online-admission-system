<?php
include ("connection.php");

if(isset($_POST['btn']))
{
  $rno=$_POST['rno'];
  $cat=$_POST['cat'];
  //$name=$_POST['chk'];
  $s="verified";
  // $aa="select * from category order by cat_name";
  // $rr=mysqli_query($con,$aa);
  // while($rrr=mysqli_fetch_array($rr))
  // {
  
  if(isset($_POST['chk']))
  {
  //$a="insert into verify(regino,status) values('$rno','$s')";

  //$result=mysqli_query($con,$a);
    //echo $cat;
        if($cat == 'EWS')
        {
          
          $a1="insert into cat1(regino) values('$rno')";
          $result1=mysqli_query($con,$a1);
    
        }
      else if($cat == 'NT-B')
        {
           
          $a2="insert into cat2(regino) values('$rno')";
          $result2=mysqli_query($con,$a2);
    
        }
         else if($cat == 'NT-C')
        {
           
          $a3="insert into cat3(regino) values('$rno')";
          $result3=mysqli_query($con,$a3);
    
        }
        else if($cat == 'NT-D')
        {
           
          $a4="insert into cat4(regino) values('$rno')";
          $result4=mysqli_query($con,$a4);
    
        }
        else if($cat == 'OBC')
        {
           
          $a5="insert into cat5(regino) values('$rno')";
          $result5=mysqli_query($con,$a5);
    
        }
       else if($cat == 'Open')
        {
           
          $a6="insert into cat6(regino) values('$rno')";
          $result6=mysqli_query($con,$a6);
    
        }
        else if($cat == 'SC')
        {
           
          $a7="insert into cat7(regino) values('$rno')";
          $result7=mysqli_query($con,$a7);
    
        }
        else if($cat == 'SEBC')
        {
           
          $a8="insert into cat8(regino) values('$rno')";
          $result8=mysqli_query($con,$a8);
    
        }
        else if($cat == 'ST')
        {
           
          $a9="insert into cat9(regino) values('$rno')";
          $result9=mysqli_query($con,$a9);
    
        }
        else if($cat == 'VJ-A')
        {
           
          $a10="insert into cat10(regino) values('$rno')";
          $result10=mysqli_query($con,$a10);
    
        }
header("location:vform.php");
}
else 
{
  // $a1="insert into verify(regino) values('$rno')";

  //$result1=mysqli_query($con,$a1);
  
 header("location:vform.php");

}

 //}
}



?>

