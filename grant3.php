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
           <li class="nav-item dropdown"><a>Merit List Criteria</a>
              <ul><li> <a href="grant2.php">Grantable Merit List Criteria</a></li>
                <li><a href="nongrant2.php">Non Grantable Merit List Criteria</a></li>
             </ul> 
          </li> 
           
        </ul>
        </div>
        </div>
        </div>
<div class="col-8" >



        <table class="table table-bordered">
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
            $q1="select g_name,max(time) from gpoint group by g_name desc ;";
            $result1=mysqli_query($con,$q1);
             while($r1=mysqli_fetch_row($result1))
           {
            

                $q="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gpoint where g_name='$r1[0]' and time='$r1[1]' ;";
                $result=mysqli_query($con,$q);
                 $r=mysqli_fetch_row($result);
                 
                ?>
                 
                 <tr> <th><?php echo $r[0];?></th>
                <td><?php echo $r[1];?></td>
              <td><?php echo $r[2];?></td>
              <td><?php echo $r[3];?></td>
              <td><?php echo $r[4];?></td>
              <td><?php echo $r[5];?></td>
              <td><?php echo $r[6];?></td>
              <td><?php echo $r[7];?></td>
              <td><?php echo $r[8];?></td>
              <td><?php echo $r[9];?></td>
              <td><?php echo $r[10];?></td>
             </tr>
          <tr>
           <?php
            include("connection.php");
            

                $q="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gtotal where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]' ;";
                $result=mysqli_query($con,$q);
                 $r=mysqli_fetch_row($result);
                 
                ?>
                
         <tr> <th>Total</th>
           <td><?php echo $r[1];?></td>
              <td><?php echo $r[2];?></td>
              <td><?php echo $r[3];?></td>
              <td><?php echo $r[4];?></td>
              <td><?php echo $r[5];?></td>
              <td><?php echo $r[6];?></td>
              <td><?php echo $r[7];?></td>
              <td><?php echo $r[8];?></td>
              <td><?php echo $r[9];?></td>
              <td><?php echo $r[10];?></td>
             </tr> 
         <tr>
           <?php
            include("connection.php");
            

                $q="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gvck where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]';";
                $result=mysqli_query($con,$q);
                 $r=mysqli_fetch_row($result);
                 
                ?>
              
         <tr> <th>VCK</th>
           <td><?php echo $r[1];?></td>
              <td><?php echo $r[2];?></td>
              <td><?php echo $r[3];?></td>
              <td><?php echo $r[4];?></td>
              <td><?php echo $r[5];?></td>
              <td><?php echo $r[6];?></td>
              <td><?php echo $r[7];?></td>
              <td><?php echo $r[8];?></td>
              <td><?php echo $r[9];?></td>
              <td><?php echo $r[10];?></td>
              </tr>
          <tr>
           <?php
            include("connection.php");
                $q="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gother where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]';";
                $result=mysqli_query($con,$q);
                 $r=mysqli_fetch_row($result);
                 
                ?>
                
         <tr> <th>Other</th>
           <td><?php echo $r[1];?></td>
              <td><?php echo $r[2];?></td>
              <td><?php echo $r[3];?></td>
              <td><?php echo $r[4];?></td>
              <td><?php echo $r[5];?></td>
              <td><?php echo $r[6];?></td>
              <td><?php echo $r[7];?></td>
              <td><?php echo $r[8];?></td>
              <td><?php echo $r[9];?></td>
              <td><?php echo $r[10];?></td>
              
               </tr>
                
 </tr>
    <?php
       }
      
  ?>
</tr>

  </tbody>
</table>
        
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
           <li class="nav-item dropdown"><a>Merit List Criteria</a>
              <ul><li> <a href="grant2.php">Grantable Merit List Criteria</a></li>
                <li><a href="nongrant2.php">Non Grantable Merit List Criteria</a></li>
             </ul> 
          </li> 
           
        </ul>
        </div>
        </div>
        </div>
<div class="col-8" >



        <table class="table table-bordered">
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
            $q1="select g_name,max(time) from gpoint group by g_name desc ;";
            $result1=mysqli_query($con,$q1);
             while($r1=mysqli_fetch_row($result1))
           {
            

                $q="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gpoint where g_name='$r1[0]' and time='$r1[1]' ;";
                $result=mysqli_query($con,$q);
                 while($r=mysqli_fetch_row($result))
                 {
                ?>
                 
                 <tr> <th><?php echo $r[0];?></th>
                <td><?php echo $r[1];?></td>
              <td><?php echo $r[2];?></td>
              <td><?php echo $r[3];?></td>
              <td><?php echo $r[4];?></td>
              <td><?php echo $r[5];?></td>
              <td><?php echo $r[6];?></td>
              <td><?php echo $r[7];?></td>
              <td><?php echo $r[8];?></td>
              <td><?php echo $r[9];?></td>
              <td><?php echo $r[10];?></td>
             
          <tr>
           <?php
            include("connection.php");
            $q1="select g_name,max(gtime) from gtotal where g_name='$r[0]' group by g_name desc ;";
            $result1=mysqli_query($con,$q1);
             while($r1=mysqli_fetch_row($result1))
           {
            

                $q="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gtotal where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]' ;";
                $result=mysqli_query($con,$q);
                 while($r=mysqli_fetch_row($result))
                 {
                ?>
                
         <tr> <th>Total</th>
           <td><?php echo $r[1];?></td>
              <td><?php echo $r[2];?></td>
              <td><?php echo $r[3];?></td>
              <td><?php echo $r[4];?></td>
              <td><?php echo $r[5];?></td>
              <td><?php echo $r[6];?></td>
              <td><?php echo $r[7];?></td>
              <td><?php echo $r[8];?></td>
              <td><?php echo $r[9];?></td>
              <td><?php echo $r[10];?></td>
              
         <tr>
           <?php
            include("connection.php");
            $q1="select g_name,max(gtime) from gvck where g_name='$r[0]' group by g_name desc ;";
            $result1=mysqli_query($con,$q1);
             while($r1=mysqli_fetch_row($result1))
           {
            

                $q="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gvck where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]';";
                $result=mysqli_query($con,$q);
                 while($r=mysqli_fetch_row($result))
                 {
                ?>
              
         <tr> <th>VCK</th>
           <td><?php echo $r[1];?></td>
              <td><?php echo $r[2];?></td>
              <td><?php echo $r[3];?></td>
              <td><?php echo $r[4];?></td>
              <td><?php echo $r[5];?></td>
              <td><?php echo $r[6];?></td>
              <td><?php echo $r[7];?></td>
              <td><?php echo $r[8];?></td>
              <td><?php echo $r[9];?></td>
              <td><?php echo $r[10];?></td>
              
          <tr>
           <?php
            include("connection.php");
            $q1="select g_name,max(gtime) from gother where g_name='$r[0]' group by g_name desc ;";
            $result1=mysqli_query($con,$q1);
             while($r1=mysqli_fetch_row($result1))
           {
            

                $q="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gother where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]';";
                $result=mysqli_query($con,$q);
                 while($r=mysqli_fetch_row($result))
                 {
                ?>
                
         <tr> <th>Other</th>
           <td><?php echo $r[1];?></td>
              <td><?php echo $r[2];?></td>
              <td><?php echo $r[3];?></td>
              <td><?php echo $r[4];?></td>
              <td><?php echo $r[5];?></td>
              <td><?php echo $r[6];?></td>
              <td><?php echo $r[7];?></td>
              <td><?php echo $r[8];?></td>
              <td><?php echo $r[9];?></td>
              <td><?php echo $r[10];?></td>
              
               </tr>
                <?php
                   }
                  }
                 ?>
          </tr>

        </tr>
            <?php
              }
              }
          ?>
     </tr>

   </tr>
      <?php
        }
        }
      ?>
   </tr>

 </tr>
    <?php
       }
      }
  ?>
</tr>

  </tbody>
</table>
<!-- 
<table class="table table-bordered">
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
            $q1="select s_id,max(gtime) from ggrant group by s_id desc ;";
            $result1=mysqli_query($con,$q1);
             while($r1=mysqli_fetch_row($result1))
           {
            

                $q="select s_id,seat from ggrant where s_id='$r1[0]' and gtime='$r1[1]' ;";
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
            //$catquota=array();
               

             while($rr1=mysqli_fetch_row($res1))
           {
           ?>
              
              <td><?php $s1=$r[1]*$rr1[1]/100;
              $ss1=Round($s1);
                //array_push($catquota, $ss1);
             
              
              echo $ss1;?></td>
         
            <?php
              }

             
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
              }
          ?>

  </tr>

  </tbody>
</table>

 --> 

        
 </div>

               
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
