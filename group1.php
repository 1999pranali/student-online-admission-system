<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
<body> 
    <?php
   include ("connection.php");

   $cid=$_POST['c_id'];

   $query="select s_id,s_name from subject,course where course.c_id=subject.c_id and subject.c_id = $cid";
   
    
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
   
  
    echo ' <label value=""></label>';
        //echo ' <option value="">Select Subject</option>';
        while($row = mysqli_fetch_array($result)){ ?>

            <input type="checkbox" name="chk[]" value="<?php echo $row['s_id']; ?>"><?php echo $row['s_name'];?><br>
      <?php  }
    
    
?> 
     
</body>
</html>
