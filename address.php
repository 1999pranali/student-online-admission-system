<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title></title>
   <link rel="stylesheet" href="scss.css">
  
   </head>
  <body>
  <div class="row">
    <div class="col-3">
    <div class="menu">
     <ul>
          <li class="nav-item"><a href="">Dashboard</a></li>
          <li class="nav-item"><a href="">Personal Info</a></li>
          <li class="nav-item"><a href="address.php">Address</a></li>
          <li class="nav-item"><a href="">Academic Details</a></li>
          <li class="nav-item"><a href="">Course and Subject Details</a></li>
          
      </ul>
    </div>
    </div>
    <div class="col-9">
      <div class="row">
        <div class="col-8" ><h4>VIVEKANAND COLLEGE,KOLHAPUR(AUTONOMOUS)</h4></div>
        <div class="col-2"><h4> Wel-come <?php session_start(); echo $_SESSION['uname'];?></h4></div>
        <div class="col-2"><h4><img src="image/logout.jpg" width="20%"><a href="logout.php"> Log Out</a></h4></div>
       </div> 
       <div class="alert alert-primary" role="alert">
         Address Details
        </div>
        <form method="POST" action="saveaddress.php">
        <div class="row" style="text-align: center;">
    <div class="col">
          <div class="form-group row">
           <label class="col-sm-3 col-form-label">Address:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="address" required="required" size="40%">
              </div>
             </div>
          <div class="form-group row">
           <label class="col-sm-3 col-form-label">District:</label>
          <div class="col-sm-9">
          <select name="district" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q="select * from district order by district_name ASC;";
                $result=mysqli_query($con,$q);
                
                echo ' <option value="">Select District</option>';

                while($r=mysqli_fetch_array($result))
                {
                  ?>
                  <option value="<?php echo $r[1]; ?>"> <?php echo $r[1]; ?>
                  </option>
                   <?php
                  }
                  ?>
                 </select>
              </div>
             </div>
            <div class="form-group row">
           <label class="col-sm-3 col-form-label">Taluka:</label>
          <div class="col-sm-9">
          <select name="taluka" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q1="select * from taluka order by t_name ASC;";
                $result1=mysqli_query($con,$q1);
                
                echo ' <option value="">Select Taluka</option>';

                while($r1=mysqli_fetch_array($result1))
                {
                  ?>
                  <option value="<?php echo $r1[1]; ?>"> <?php echo $r1[1]; ?>
                  </option>
                   <?php
                  }
                  ?>
                 </select>
              </div>
             </div>
             
    </div>
    <div class="col">
            <div class="form-group row">
            <label class="col-sm-3 col-form-label">State:</label>
          <div class="col-sm-9">
          <select name="state" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q3="select * from state order by state_name ASC;";
                $result3=mysqli_query($con,$q3);
                
                echo ' <option value="">Select State</option>';

                while($r3=mysqli_fetch_array($result3))
                {
                  ?>
                  <option value="<?php echo $r3[1]; ?>"> <?php echo $r3[1]; ?>
                  </option>
                   <?php
                  }
                  ?>
                 </select>
              </div>
            </div>
            <div class="form-group row">
           <label class="col-sm-3 col-form-label">Pin Code:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" name="pcode" size="40%">
              </div></div>
     </div>
     </div>
      
       <button type="submit" class="btn btn-primary" name="btnsub">Save and Next</button>
          <button type="reset" class="btn btn-primary">Clear</button>
    
  </form>
  </div>     
 </div>
  
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


      
    