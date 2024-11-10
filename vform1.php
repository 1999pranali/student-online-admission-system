<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
<body> 
    <?php
   include ("connection.php");

   $aid=$_POST['aid'];
   $query1="select r_id from cands where cands.regino ='$aid'";
    $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
    if($rr=mysqli_fetch_array($result1))
    {
         $query="select * from pinfo,academic,cands where cands.r_id=$rr[0] and pinfo.r_id=$rr[0] and academic.r_id=$rr[0];";
          $result = mysqli_query($con,$query) or die(mysqli_error($con));
          $r=mysqli_fetch_array($result);
          echo '<label value=""></label>';
      ?>
       <label>Name:</label>
         <input type="text" name="name" class="form-control" required="required" autofocus="autofocus" size="100%" value="<?php
          $rt="SELECT Concat(fname,' ',mname,' ',lname) AS fulldetail FROM pinfo,cands where pinfo.r_id=$rr[0];"; 
          $c= mysqli_query($con,$rt) or die(mysqli_error($con));
          $rows = mysqli_fetch_assoc($c);
          $cc= $rows['fulldetail'];
          echo $cc;?>">
        <label>Total Marks:</label>
        <input type="text" name="mark" class="form-control" required="required" autofocus="autofocus" value="<?php echo $r[24];?>">
        <label>Out of:</label>
        <input type="text" name="mark1" class="form-control" required="required" autofocus="autofocus" value="<?php echo $r[25];?>">
    
        <label>Category:</label>
        <input type="text" name="cat" class="form-control"  required="required" autofocus="autofocus" value="<?php echo $r[12];?>">
      <?php
      }
      else
      {
          echo "record not found";
      }
      ?>

</body>
</html>
