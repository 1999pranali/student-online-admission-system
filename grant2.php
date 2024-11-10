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
                 <li> <a href="taluka.php">Taluka</a></li>
                <li><a href="domicile.php">Domicile State</a></li>
                
                <li><a href="nation.php">Nationality</a></li>
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
           <li class="nav-item dropdown"><a href="ayear.php">Admission Year</a>
               
          </li> 
           <li class="nav-item dropdown"><a>Admission Process</a>
              <ul><li> <a href="vform.php">Verification Form</a></li>
             </ul> 
          </li>
          <li class="nav-item dropdown"><a>Reports</a>
               <ul><li> <a href="yearwise.php">Yearwise General Merit List</a></li>
                <li> <a href="genmerit.php">Groupwise General Merit List</a></li>
                <li> <a href="castwise.php">Castwise General Merit List</a></li>
                <li> <a href="clgwise.php">Groupwise General Merit List with College Name</a></li>
                <li> <a href="castclg.php">Castwise General Merit List with College Name</a></li>
                 <li> <a href="firstmerit.php">Groupwise First Merit List(Grantable)</a></li>
                 <li> <a href="firstmeritt.php">Groupwise First Merit List(Nongrantable )</a></li>
              </ul> 
          </li> 
          
        </ul>
        </div>
        </div>
        </div>
<div class="col-8" >
  <br>
<div><h4>Grantable Merit List Criteria</h4></div>

<br>
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
                 
              <tr> <th><?php echo $r[0]; ?></th>
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
            
            

                $q2="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gtotal where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]' ;";
                $result2=mysqli_query($con,$q2);
                 $r2=mysqli_fetch_row($result2);
                 
                ?>
                
         <tr> <th>Total</th>
           <td><?php echo $r2[1];?></td>
              <td><?php echo $r2[2];?></td>
              <td><?php echo $r2[3];?></td>
              <td><?php echo $r2[4];?></td>
              <td><?php echo $r2[5];?></td>
              <td><?php echo $r2[6];?></td>
              <td><?php echo $r2[7];?></td>
              <td><?php echo $r2[8];?></td>
              <td><?php echo $r2[9];?></td>
              <td><?php echo $r2[10];?></td>
             </tr> 
         <tr>
           <?php
            
            

                $q3="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gvck where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]';";
                $result3=mysqli_query($con,$q3);
                 $r3=mysqli_fetch_row($result3);
                 
                ?>
              
         <tr> <th>VCK</th>
           <td><?php echo $r3[1];?></td>
              <td><?php echo $r3[2];?></td>
              <td><?php echo $r3[3];?></td>
              <td><?php echo $r3[4];?></td>
              <td><?php echo $r3[5];?></td>
              <td><?php echo $r3[6];?></td>
              <td><?php echo $r3[7];?></td>
              <td><?php echo $r3[8];?></td>
              <td><?php echo $r3[9];?></td>
              <td><?php echo $r3[10];?></td>
              </tr>
          <tr>
           <?php

                $q4="select g_name,cat1,cat2,cat3,cat4,cat5,cat6,cat7,cat8,cat9,cat10 from gother where g_name='$r1[0]' and gtime='$r1[1]' and g_name='$r[0]';";
                $result4=mysqli_query($con,$q4);
                 $r4=mysqli_fetch_row($result4);
                 
                ?>
                
         <tr> <th>Other</th>
           <td><?php echo $r4[1];?></td>
              <td><?php echo $r4[2];?></td>
              <td><?php echo $r4[3];?></td>
              <td><?php echo $r4[4];?></td>
              <td><?php echo $r4[5];?></td>
              <td><?php echo $r4[6];?></td>
              <td><?php echo $r4[7];?></td>
              <td><?php echo $r4[8];?></td>
              <td><?php echo $r4[9];?></td>
              <td><?php echo $r4[10];?></td>
              
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




















