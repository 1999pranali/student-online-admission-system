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
 <?php
include("connection.php");
if(isset($_GET['gid']))
  {
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
        <form method="POST" action="savenongrant.php"  >

          <div class="form-group">
            <div class="form-label-group">
              
              <input type="hidden" name="sid" class="form-control" placeholder="Total Number of Seats" required="required" autofocus="autofocus" value="<?php echo $r[1];?>">
              </div>
              </div>
        
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
     
      <td><a href="nongrant.php?gid=<?php echo $r[0];?>"><button type="button" class="btn btn-primary btn-sm" name="btnsub">Edit</button></a></td>
      </tr>
      <?php
        }
        ?>
     
  </tbody>
</table>
<?php
}
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
                  $cat=array();
                 ?><option>
                  <?php
                   foreach($arr as $i) 
                     {
                        $sub="select s_name from subject where s_id=$i;";
                        $rr=mysqli_query($con,$sub);
                        $rrr=mysqli_fetch_row($rr);
                         //echo $rrr[0]. ",";
                      array_push($cat,$rrr[0]);
                    }
                    $subject1=implode(",",$cat);
                    echo $subject1;
                    ?></option>

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
     
      <td><a href="nongrant.php?gid=<?php echo $r[0];?>"><button type="button" class="btn btn-primary btn-sm" name="btnsub">Edit</button></a></td>
      </tr>
 

      <?php
        }
        ?>
     
  </tbody>
</table>
<?php
    }
    ?>



        
      
        
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
