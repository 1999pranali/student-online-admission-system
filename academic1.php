<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
<body> 
    <?php
   include ("connection.php");

   $marks1=$_POST['total_id'];
    $marks2=$_POST['outof_id'];
  
    $per=($marks1/$marks2)*100;
   
  
    echo ' <label value=""></label>';
    ?>
       
            <input type="text" name="per"><?php echo $per;?><br>
      
     
</body>
</html>
