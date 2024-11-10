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
  <body onload="document.pranali.mbno.focus()">
  <div class="row">
    <div class="col-3">
    <div class="menu">
     <ul>
          <li class="nav-item"><a href="">Dashboard</a></li>
          <li class="nav-item"><a href="perinfo.php">Personal Info</a></li>
          <li class="nav-item"><a href="">Address</a></li>
          <li class="nav-item"><a href="">Academic Details</a></li>
          <li class="nav-item"><a href="">Course and Subject Details</a></li>
          
      </ul>
    </div>
    </div>
    <div class="col-9">
      <div class="row">
        
        <div class="col-8" ><h4>VIVEKANAND COLLEGE,KOLHAPUR(AUTONOMOUS)</h4></div>
        <div class="col-2"><h4> Wel-come <?php session_start(); echo $_SESSION['uname'];?></h4></div>
        <div class="col-2"><h4><img src="image/logout.jpg" width="20%"> <a href="logout.php">Log Out</a></h4></div>
       </div> 
       <div class="alert alert-primary" role="alert">
         Personal Information
        </div>
        <form method="POST" action="saveperinfo.php" name="pranali">
        <div class="row" style="text-align: center;">
        <div class="col">
          <div class="form-group row">
           <label class="col-sm-3 col-form-label">Title:</label>
          <div class="col-sm-9">
             <select name="title" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <option value="">Select Title</option>;
                <option value="MR">MR</option>
                <option value="MS">MS</option>
             </select>
           </div>
         </div>
             
          <div class="form-group row">
           <label class="col-sm-3 col-form-label">Last Name:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" name="lname" size="40%">
              </div>
             </div>
          <div class="form-group row">
           <label class="col-sm-3 col-form-label">First Name:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fname" required="required" size="40%">
              </div>
             </div>
            <div class="form-group row">
           <label class="col-sm-3 col-form-label">Middle Name:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mname" required="required" size="40%">
              </div>
             </div>
             <div class="form-group row">
           <label class="col-sm-3 col-form-label">Gender:</label>
          <div class="col-sm-9">
             <select name="gender" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <option value="">Select Gender</option>;
                <option value="Male">Male</option>
                <option value="Female">Female</option>
             </select>
           </div>
         </div>
             <div class="form-group row">
           <label class="col-sm-3 col-form-label">Mobile No.:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mbno" required="required" size="40%" onclick="phonenum(document.pranali.mbno)">
          <script type="text/javascript">
            function phonenum(inputtxt){

              var phoneno= /^\d{10}$/;
              if((inputtxt.value.match(phoneno))){
                return true;

              }
              else
              {
                alert("please enter 10 digit mobile number");
                return false;
              }
            }
          </script>
              </div>
             </div>
             <div class="form-group row">
           <label class="col-sm-3 col-form-label">E-mail ID:</label>
          <div class="col-sm-9">
          <input type="email" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" required="required" size="40%">
              </div>
             </div>
             <div class="form-group row">
           <label class="col-sm-3 col-form-label">Date of Birth:</label>
          <div class="col-sm-9">
          <input type="date" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dob" required="required" onclick="datearrival()">
          <script>
            function datearrival(){
              var x=document.createElement("input");
              x.setAttribute("type","date");
              x.setAttribute("value","2014-03-06");
              document.body,appendChild(x);
            }
          </script>
              </div>
             </div>
             
    </div>
    <div class="col">
              <div class="form-group row">
            <label class="col-sm-3 col-form-label">Admission Year:</label>
          <div class="col-sm-9">
          <select name="ayear" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q="select * from acayear;";
                $result=mysqli_query($con,$q);
                
                echo ' <option value="">Select Admission Year</option>';

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
            <label class="col-sm-3 col-form-label">Father Name:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" name="faname" size="40%">
              </div>
            </div>
            <div class="form-group row">
           <label class="col-sm-3 col-form-label">Mother Name:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" name="moname" size="40%">
              </div></div>
               <div class="form-group row">
            <label class="col-sm-3 col-form-label">Religion:</label>
          <div class="col-sm-9">
          <select name="religion" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q="select * from religions order by r_name ASC;";
                $result=mysqli_query($con,$q);
                
                echo ' <option value="">Select Religion</option>';

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
           <label  class="col-sm-3 col-form-label">Subcast:</label>
          <div class="col-sm-9">
          <select name="subcast" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q1="select * from subcat order by scat_name ASC;";
                $result1=mysqli_query($con,$q1);
                echo ' <option value="">Select Subcast</option>';

                while($r1=mysqli_fetch_array($result1))
                {
                  ?>
                  <option value="<?php echo $r1[1]; ?>"> <?php echo $r1[1]; ?>
                  </option>
                   <?php
                  }
                  ?>
                 </select>
              </div></div>
               <div class="form-group row">
            <label class="col-sm-3 col-form-label">Cast Category:</label>
          <div class="col-sm-9">
          <select name="cat" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q2="select * from category order by cat_name ASC;";
                $result2=mysqli_query($con,$q2);
                echo ' <option value="">Select Castcategory</option>';

                while($r2=mysqli_fetch_array($result2))
                {
                  ?>
                  <option value="<?php echo $r2[1]; ?>"> <?php echo $r2[1]; ?>
                  </option>
                   <?php
                  }
                  ?>
                 </select>
               </div>
            </div>
            <div class="form-group row">
           <label class="col-sm-3 col-form-label">Nationality:</label>
          <div class="col-sm-9">
          <select name="nation" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q3="select * from nationality order by nation_name ASC;";
                $result3=mysqli_query($con,$q3);
                
                echo ' <option value="">Select Nationality</option>';

                while($r3=mysqli_fetch_array($result3))
                {
                  ?>
                  <option value="<?php echo $r3[1]; ?>"> <?php echo $r3[1]; ?>
                  </option>
                   <?php
                  }
                  ?>
                 </select>
              </div></div>
            <div class="form-group row">
           <label class="col-sm-3 col-form-label">Domicile State:</label>
          <div class="col-sm-9">
          <select name="dname" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" >
              <?php
                
                include ("connection.php");
                $q4="select * from domicile order by domicile_name ASC;";
                $result4=mysqli_query($con,$q4);
                
                echo ' <option value="">Select Domicile State Name</option>';

                while($r4=mysqli_fetch_array($result4))
                {
                  ?>
                  <option value="<?php echo $r4[1]; ?>"> <?php echo $r4[1]; ?>
                  </option>
                   <?php
                  }
                  ?>
                 </select>
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


      
    