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
                 <li><a href="reservecat.php">Type of Category</a></li>
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
          <li class="nav-item dropdown"><a href="ayear.php">Admission Year</a>
               
          </li> 
           <li class="nav-item dropdown"><a>Admission Form</a>
              <ul><li> <a href="vform.php">Verification Form</a></li>
                <li><a href="cform.php">Confirm Form</a></li>
             </ul> 
          </li>
        </ul>
        </div>
        </div>
        </div>
<div class="col-8" >
   <?php
include("connection.php");

$id=$_GET['tid'];
if(isset($id)){
  $q="select * from rescat where rcat_id=$id;";
  $result=mysqli_query($con,$q);
  $r=mysqli_fetch_row($result);


?>

        <div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Type of Category</div>
        <div class="card-body">
          <form method="POST" action="editres.php">
          
          <div class="form-group">
            <div class="form-label-group">
              <label>Type of Category Name:</label>
              <input type="text" name="tname" class="form-control" placeholder="Type of Category Name" required="required" autofocus="autofocus" value="<?php echo $r[1];?>">
              </div>
              </div>
              <input type="hidden" name="tid" value="<?php echo $id;?>">

             <button class="btn btn-primary btn-sm" type="submit" name="btnsub">Save Type of Category</button>
              </div>
          </div>
          </div>
          </form></br></br>
         <table class="table">
        <thead class="thead-light">
         <tr>
         <th scope="col">Type of category</th>
         <th scope="col" colspan="2">Action</th>
        </tr>
         </thead>
        <tbody>
          <?php
            include("connection.php");
            $q="select * from rescat;";
            $result=mysqli_query($con,$q);
             while($r=mysqli_fetch_row($result))
           {
           ?>
         <tr>
    <input type="hidden" name="" value="<?php echo $r[0];?>">
      <td><?php echo $r[1];?></td>
      <td><a href="reservecat.php?tid=<?php echo $r[0];?>"><button type="button" class="btn btn-primary btn-sm" name="btnedit">Edit</button></a></td>
      <td><form action="deleteres.php" method="POST"><button type="submit" class="btn btn-primary btn-sm" name="btndelete" value="<?php echo $r[0];?>">Delete</button></form></td>
      </tr>
      <?php
        }
        ?>
     
  </tbody>
</table>
<?php
}

    else{
      ?>
        <div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Type of Category</div>
        <div class="card-body">
          <form method="POST" action="reservecat1.php">
          <div class="form-group">
            <div class="form-label-group">

              <label>Type of Category Name:</label>
              <input type="text" name="tname" class="form-control" placeholder="Type of Category Name" required="required" autofocus="autofocus">
              </div>
              </div>
               <button class="btn btn-primary btn-sm" type="submit" name="btnsub">Save Type of Category</button>
              </div>
          </div>
          </div>
         </form></br></br>
         <table class="table">
        <thead class="thead-light">
         <tr>
         <th scope="col">Type of category</th>
         <th scope="col" colspan="2">Action</th>
        </tr>
         </thead>
        <tbody>
          <?php
            include("connection.php");
            $q="select * from rescat;";
            $result=mysqli_query($con,$q);
             while($r=mysqli_fetch_row($result))
           {
           ?>
         <tr>
      <input type="hidden" name="" value="<?php echo $r[0];?>">
      <td><?php echo $r[1];?></td>
      <td><a href="reservecat.php?tid=<?php echo $r[0];?>"><button type="button" class="btn btn-primary btn-sm" name="btnedit">Edit</button></a></td>
      <td><form action="deleteres.php" method="POST"><button type="submit" class="btn btn-primary btn-sm" name="btndelete" value="<?php echo $r[0];?>">Delete</button></form></td>
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
 
    
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

