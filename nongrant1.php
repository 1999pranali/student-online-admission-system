<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title></title>
   <link rel="stylesheet" href="index.css">
  
   </head>
  <body>
  <div class="header" style="text-align: center; width: 100%; height: 80px; display: block; background-color: gray; color: white; padding-top: 10px; ">
     <h1>Admin Panel</h1>
   </div>
   <div class="row">
        <div class="col-4">
        <div  aria-orientation="vertical">
        <div class="dropdown">
        <ul>
          <li class="nav-item dropdown"><a>Course And Subject</a>
             <ul><li><a href="course.php">Course</a></li>
              <li><a href="subject.php">Subject</a></li>
              <li><a href="group.php">Group Creation</a></li>
              </ul>
          </li> 
           <li class="nav-item dropdown"><a>Category</a>
                <ul><li><a href="religion.php">Religion</a></li>
                <li><a href="subcast.php">Subcast</a></li>
                 <li><a href="castcat.php">Castcategory</a></li>
              </ul>
          
          </li> 
           <li class="nav-item dropdown"><a>Address</a>
              <ul><li> <a href="state.php">State</a></li>
                <li><a href="district.php">District</a></li>
                <li><a href="domicile.php">Nationality</a></li>
             </ul> 
          </li>
          <li class="nav-item dropdown"><a>Admission Quota</a>
              <ul><li> <a href="grant.php">Grantable</a></li>
                <li><a href="nongrant.php">Non Grantable</a></li>
             </ul> 
          </li> 
        </ul>
        </div>
        </div>
        </div>
<div class="col-8" >
 <?php
include("connection.php");
$id=$_GET['gid'];
if(isset($id)){
  $q="select * from nongrant where ngrant_id=$id;";
  $result=mysqli_query($con,$q);
  $r=mysqli_fetch_row($result);
?>

        <div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Nongrantable Admission Quota</div>
        <div class="card-body">
        <form method="POST" action="editnongrant.php"  >
          <div class="form-group">
            <div class="form-label-group">
              <label>Total Number of Seats:</label>
              <input type="text" name="seat" class="form-control" placeholder="Total Number of Seats" required="required" autofocus="autofocus" value="<?php echo $r[2];?>">
              </div>
              </div>
        <input type="hidden" name="gid" value="<?php echo $id;?>">
         <div class="form-group">
            <div class="form-label-group">
              <label>Academic Year:</label>
              <input type="text" name="a_year" class="form-control" placeholder="Academic Year" required="required" autofocus="autofocus" value="<?php echo $r[3];?>">
              </div>
              </div>
           <div class="form-group">
            <div class="form-label-group">
              <label>Current Date:</label>
              <input type="text" name="c_date" class="form-control" placeholder="Current Date" required="required" autofocus="autofocus" value="<?php echo $r[4];?>">
              </div>
              </div>
        
             <button class="btn btn-primary btn-sm" type="submit" name="btnsub">Save</button>
              </div>
          </div>
          </div>
        </form></br></br>



 <table class="table">
        <thead class="thead-light">
         <tr>
         <th scope="col">Group Name</th>
         <th scope="col">Total Seats</th>
         <th scope="col">Acdemic Year</th>
          <th scope="col">Current Date</th>
           <th scope="col" colspan="2">Action</th>
        </tr>
         </thead>
        <tbody>
          <?php
            include("connection.php");
            $q="select * from nongrant ;";
            $result=mysqli_query($con,$q);
             while($r=mysqli_fetch_row($result))
           {
           ?>
         <tr>
      <input type="hidden" name="" value="<?php echo $r[0];?>">
      <td><?php echo $r[1];?></td>
      <td><?php echo $r[2];?></td>
       <td><?php echo $r[3];?></td>
      <td><?php echo $r[4];?></td>
     
      <td><a href="nongrant1.php?gid=<?php echo $r[0];?>"><button type="button" class="btn btn-primary btn-sm" name="btnsub">Edit</button></a></td>
      </tr>
      <?php
        }
        ?>
     
  </tbody>
</table>
<?php
}
else
{
  ?>


        <div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Nongrantable Admission Quota</div>
        <div class="card-body">
        <form method="POST" action="savenongrant.php"  >
         <div class="form-group">
            <div class="form-label-group">
               <label>Group Name:</label>
               <select  name="sid" class="form-control"  required="required" autofocus="autofocus" >
            
          <?php
            include("connection.php");
            $que="select s_id from group2 ;";
            $res=mysqli_query($con,$que);
            while($r=mysqli_fetch_row($res))

                {
                 $arr=explode(',', $r[0]);
                 ?><option>
                  <?php
                   foreach($arr as $i) 
                     {
                        $sub="select s_name from subject where s_id=$i;";
                        $rr=mysqli_query($con,$sub);
                        $rrr=mysqli_fetch_row($rr);
                         echo $rrr[0]. ",";}?></option>

                         <?php
                          }
                         ?>
          </select>
         </div>
         </div>
          <div class="form-group">
            <div class="form-label-group">
              <label>Total Number of Seats:</label>
              <input type="text" name="seat" class="form-control" placeholder="Total Number of Seats" required="required" autofocus="autofocus" value="">
              </div>
              </div>
        
         <div class="form-group">
            <div class="form-label-group">
              <label>Academic Year:</label>
              <input type="text" name="a_year" class="form-control" placeholder="Academic Year" required="required" autofocus="autofocus" value="">
              </div>
              </div>
           <div class="form-group">
            <div class="form-label-group">
              <label>Current Date:</label>
              <input type="text" name="c_date" class="form-control" placeholder="Current Date" required="required" autofocus="autofocus" value="">
              </div>
              </div>
        
             <button class="btn btn-primary btn-sm" type="submit" name="btnsub">Save</button>
              </div>
          </div>
          </div>
        </form></br></br>
        <table class="table">
        <thead class="thead-light">
         <tr>
         <th scope="col">Group Name</th>
         <th scope="col">Total Seats</th>
         <th scope="col">Acdemic Year</th>
          <th scope="col">Current Date</th>
           <th scope="col" colspan="2">Action</th>
        </tr>
         </thead>
        <tbody>
          <?php
            include("connection.php");
            $q="select * from nongrant ;";
            $result=mysqli_query($con,$q);
             while($r=mysqli_fetch_row($result))
           {
           ?>
         <tr>
      <input type="hidden" name="" value="<?php echo $r[0];?>">
      <td><?php echo $r[1];?></td>
      <td><?php echo $r[2];?></td>
       <td><?php echo $r[3];?></td>
      <td><?php echo $r[4];?></td>
     
      <td><a href="nongrant1.php?gid=<?php echo $r[0];?>"><button type="button" class="btn btn-primary btn-sm" name="btnsub">Edit</button></a></td>
      </tr>
 

      <?php
        }
        ?>
     
  </tbody>
</table>
<?php
    }
    ?>



        
        <!--  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Group</th>
       <?php
          include("connection.php");
            $q="select * from category order by cat_name asc;";
            $result=mysqli_query($con,$q);
             while($r=mysqli_fetch_row($result))
           {
           ?>
       <th> 
    <?php echo $r[1]."<br>";
       echo $r[2]."%";?>
      </th>
      <?php
        }
        ?>
      </tr>
  </thead>
  <tbody>
    
  <tr>
    <?php
          include("connection.php");
            $q="select s_id,nseat from nongrant;";
            $result=mysqli_query($con,$q);
             while($r=mysqli_fetch_row($result))
           {
           ?>
         <tr>
         <tr> <th><?php echo $r[0];?></th><?php 
              $qq="select cat_name,cat_quota from category order by cat_name asc;";
            $res=mysqli_query($con,$qq);
             while($rr=mysqli_fetch_row($res))
           {
           ?>
              
              <td><?php echo $r[1]*$rr[1]/100;?></td>
         
            <?php
              }
            ?></tr>
         <tr> <th>Total</th><?php 
              $qq1="select cat_name,cat_quota from category order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
              $catquota=array();

             while($rr1=mysqli_fetch_row($res1))
           {
           ?>
              
              <td><?php $s1=$r[1]*$rr1[1]/100;
              $ss1=Round($s1);
              array_push($catquota, $ss1);
              
              echo $ss1;?></td>
         
            <?php
              }

              $qq="select g_name from nongrantquota where g_name='$r[0]';";
               $in=mysqli_query($con,$qq);
               if(!$in){
                $insertquota="insert into nongrantquota values('$r[0]','$catquota[0]','$catquota[1]','$catquota[2]','$catquota[3]','$catquota[4]','$catquota[5]','$catquota[6]','$catquota[7]','$catquota[8]',
              '$catquota[9]') ;";
              $in1=mysqli_query($con,$insertquota) or die(mysqli_error($con));
               }



              // $insertquota="insert into nongrantquota values('$r[0]','$catquota[0]','$catquota[1]','$catquota[2]','$catquota[3]','$catquota[4]','$catquota[5]','$catquota[6]','$catquota[7]','$catquota[8]',
              // '$catquota[9]') WHERE NOT EXISTS ( SELECT g_name FROM nongrantquota WHERE g_name='$r[0]');";
              // $in1=mysqli_query($con,$insertquota) or die(mysqli_error($con));
 
            ?></tr>
         <tr> <th>VCK</th>
          <?php 
              $qq2="select cat_name,cat_quota from category order by cat_name asc;";
            $res2=mysqli_query($con,$qq2);
             while($rr2=mysqli_fetch_row($res2))
           {
           ?>
              
              <td><?php $s2=$r[1]*$rr2[1]/100;
              $ss2=Round($s2);
              $sss2= $ss2*80/100;
              $ssss2=Round($sss2);
              echo $ssss2;?></td>
         
            <?php
              }
            ?>
         </tr>
         <tr> <th>Others</th><?php 
              $qq3="select cat_name,cat_quota from category order by cat_name asc;";
            $res3=mysqli_query($con,$qq3);
             while($rr3=mysqli_fetch_row($res3))
           {
           ?>
              
              <td><?php $s3=$r[1]*$rr3[1]/100;
              $ss3=Round($s3);
              $sss3= $ss3*20/100;
              $ssss3=Round($sss3);
              echo $ssss3;?></td>
         
            <?php
              }
            ?></tr>
                      
          </tr>
            <?php
              }
              
          ?>
  </tr>

  </tbody>
</table>


 -->

        
 </div>    
  </div>
</div>

               
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title></title>
   <link rel="stylesheet" href="index.css">
  
   </head>
  <body>
  <div class="header" style="text-align: center; width: 100%; height: 80px; display: block; background-color: gray; color: white; padding-top: 10px; ">
     <h1>Admin Panel</h1>
   </div>
   <div class="row">
        <div class="col-4">
        <div  aria-orientation="vertical">
        <div class="dropdown">
        <ul>
          <li class="nav-item dropdown"><a>Course And Subject</a>
             <ul><li><a href="course.php">Course</a></li>
              <li><a href="subject.php">Subject</a></li>
              <li><a href="group.php">Group Creation</a></li>
              </ul>
          </li> 
           <li class="nav-item dropdown"><a>Category</a>
                <ul><li><a href="religion.php">Religion</a></li>
                <li><a href="subcast.php">Subcast</a></li>
                 <li><a href="castcat.php">Castcategory</a></li>
              </ul>
          
          </li> 
           <li class="nav-item dropdown"><a>Address</a>
              <ul><li> <a href="state.php">State</a></li>
                <li><a href="district.php">District</a></li>
                <li><a href="domicile.php">Nationality</a></li>
             </ul> 
          </li>
          <li class="nav-item dropdown"><a>Admission Quota</a>
              <ul><li> <a href="grant.php">Grantable</a></li>
                <li><a href="nongrant.php">Non Grantable</a></li>
             </ul> 
          </li> 
        </ul>
        </div>
        </div>
        </div>
<div class="col-8" >
        <div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Nongrantable Admission Quota</div>
        <div class="card-body">
        <form method="POST" action="savenongrant.php"  >
         <div class="form-group">
            <div class="form-label-group">
               <label>Group Name:</label>
               <select  name="sid" class="form-control"  required="required" autofocus="autofocus" >
            
          <?php
            include("connection.php");
            $que="select s_id from group2 ;";
            $res=mysqli_query($con,$que);
            while($r=mysqli_fetch_row($res))

                {
                 $arr=explode(',', $r[0]);
                 ?><option>
                  <?php
                   foreach($arr as $i) 
                     {
                        $sub="select s_name from subject where s_id=$i;";
                        $rr=mysqli_query($con,$sub);
                        $rrr=mysqli_fetch_row($rr);
                         echo $rrr[0]. ",";}?></option>

                         <?php
                          }
                         ?>
          </select>
         </div>
         </div>
          <div class="form-group">
            <div class="form-label-group">
              <label>Total Number of Seats:</label>
              <input type="text" name="seat" class="form-control" placeholder="Total Number of Seats" required="required" autofocus="autofocus" value="">
              </div>
              </div>
        
         <div class="form-group">
            <div class="form-label-group">
              <label>Academic Year:</label>
              <input type="text" name="a_year" class="form-control" placeholder="Academic Year" required="required" autofocus="autofocus" value="">
              </div>
              </div>
           <div class="form-group">
            <div class="form-label-group">
              <label>Current Date:</label>
              <input type="text" name="c_date" class="form-control" placeholder="yyyy/mm/dd" required="required" autofocus="autofocus" value="">
              </div>
              </div>
        
             <button class="btn btn-primary btn-sm" type="submit" name="btnsub">Save</button>
              </div>
          </div>
          </div>
        </form></br></br>




        
        <!--  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Group</th>
       <?php
          include("connection.php");
            $q="select * from category order by cat_name asc;";
            $result=mysqli_query($con,$q);
             while($r=mysqli_fetch_row($result))
           {
           ?>
       <th> 
    <?php echo $r[1]."<br>";
       echo $r[2]."%";?>
      </th>
      <?php
        }
        ?>
      </tr>
  </thead>
  <tbody>
    
  <tr>
    <?php
          include("connection.php");
            $q="select s_id,nseat from nongrant;";
            $result=mysqli_query($con,$q);
             while($r=mysqli_fetch_row($result))
           {
           ?>
         <tr>
         <tr> <th><?php echo $r[0];?></th><?php 
              $qq="select cat_name,cat_quota from category order by cat_name asc;";
            $res=mysqli_query($con,$qq);
             while($rr=mysqli_fetch_row($res))
           {
           ?>
              
              <td><?php echo $r[1]*$rr[1]/100;?></td>
         
            <?php
              }
            ?></tr>
         <tr> <th>Total</th><?php 
              $qq1="select cat_name,cat_quota from category order by cat_name asc;";
            $res1=mysqli_query($con,$qq1);
              $catquota=array();

             while($rr1=mysqli_fetch_row($res1))
           {
           ?>
              
              <td><?php $s1=$r[1]*$rr1[1]/100;
              $ss1=Round($s1);
              array_push($catquota, $ss1);
              
              echo $ss1;?></td>
         
            <?php
              }

              $qq="select g_name from nongrantquota where g_name='$r[0]';";
               $in=mysqli_query($con,$qq);
               if(!$in){
                $insertquota="insert into nongrantquota values('$r[0]','$catquota[0]','$catquota[1]','$catquota[2]','$catquota[3]','$catquota[4]','$catquota[5]','$catquota[6]','$catquota[7]','$catquota[8]',
              '$catquota[9]') ;";
              $in1=mysqli_query($con,$insertquota) or die(mysqli_error($con));
               }



              // $insertquota="insert into nongrantquota values('$r[0]','$catquota[0]','$catquota[1]','$catquota[2]','$catquota[3]','$catquota[4]','$catquota[5]','$catquota[6]','$catquota[7]','$catquota[8]',
              // '$catquota[9]') WHERE NOT EXISTS ( SELECT g_name FROM nongrantquota WHERE g_name='$r[0]');";
              // $in1=mysqli_query($con,$insertquota) or die(mysqli_error($con));
 
            ?></tr>
         <tr> <th>VCK</th>
          <?php 
              $qq2="select cat_name,cat_quota from category order by cat_name asc;";
            $res2=mysqli_query($con,$qq2);
             while($rr2=mysqli_fetch_row($res2))
           {
           ?>
              
              <td><?php $s2=$r[1]*$rr2[1]/100;
              $ss2=Round($s2);
              $sss2= $ss2*80/100;
              $ssss2=Round($sss2);
              echo $ssss2;?></td>
         
            <?php
              }
            ?>
         </tr>
         <tr> <th>Others</th><?php 
              $qq3="select cat_name,cat_quota from category order by cat_name asc;";
            $res3=mysqli_query($con,$qq3);
             while($rr3=mysqli_fetch_row($res3))
           {
           ?>
              
              <td><?php $s3=$r[1]*$rr3[1]/100;
              $ss3=Round($s3);
              $sss3= $ss3*20/100;
              $ssss3=Round($sss3);
              echo $ssss3;?></td>
         
            <?php
              }
            ?></tr>
                      
          </tr>
            <?php
              }
              
          ?>
  </tr>

  </tbody>
</table>


 -->

        
 </div>    
  </div>
</div>

               
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

