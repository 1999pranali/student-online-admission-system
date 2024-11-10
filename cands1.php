<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
<body> 
    <?php
   include ("connection.php");

   $cid=$_POST['c_id'];

   $query="select g_id,s_id from group2,course where course.c_id=group2.c_id and group2.c_id = $cid";
   
    
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
   
  
    echo ' <label ></label>';
                while($row = mysqli_fetch_array($result)){ 

        $arr=explode(',', $row[1]);
        $cat=array();

        ?>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td><input type="radio" name="chk" value="<?php echo $row[1];?>"></td>
              <td><?php  
          foreach($arr as $i) 
          {
            $sub="select s_name from subject where s_id=$i;";
            $rr=mysqli_query($con,$sub);
            $rrr=mysqli_fetch_row($rr);?>
          <?php
         //$grname=$rrr[0]. ",";
         //echo $rrr[0]. ",";
         array_push($cat,$rrr[0]);
        }
        $subject1=implode(",",$cat);
        echo $subject1;
        ?></td>
            </tr>
             <?php
    }
    
    
  ?> 
 
          </tbody>
        </table>
           

                
              
    
     
</body>
</html>
