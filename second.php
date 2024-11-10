<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
<body> 
    <?php
//Include the database configuration file
    $con=mysqli_connect("localhost","root","","dropdown") or die(mysqli_error($con));

   

    $cid=$_POST['country_id'];

   
    $query= "SELECT * FROM states where  country_id = $cid ;";
   
    
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
   
  

        echo '<option value="">Select state</option>';
        while($row = mysqli_fetch_array($result)){ ?>

            <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name'];?></option>';
      <?php  }
    
    
?> 
     
</body>
</html>
