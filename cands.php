
     <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title></title>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

   <link rel="stylesheet" href="scss.css">
  
   </head>
  <body>
  <div class="row">
    <div class="col-3">
    <div class="menu">
     <ul>
          <li class="nav-item"><a href="">Dashboard</a></li>
          <li class="nav-item"><a href="">Personal Info</a></li>
          <li class="nav-item"><a href="">Address</a></li>
          <li class="nav-item"><a href="">Academic Details</a></li>
          <li class="nav-item"><a href="cands.php">Course and Subject Details</a></li>
          
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
         Course and Subject Details
        </div>
        <form method="POST" action="savecands.php">
        <div class="row" style="text-align: center;">
        <div class="col">
          <div class="form-group row">
           <label class="col-sm-3 col-form-label">Course:</label>
          <div class="col-sm-9">
          <select name="course" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" id="course">
              <?php
                
                include ("connection.php");
                $q="select * from course ;";
                $result=mysqli_query($con,$q);
                
                echo ' <option value="">Select Course</option>';

                while($r=mysqli_fetch_array($result))
                {
                  ?>
                  <option value="<?php echo $r[0]; ?>"> <?php echo $r[1]; ?>
                  </option>
                   <?php
                  }
                  ?>
                 </select>
              </div>
             </div>
            <div class="form-group row">
           <label  class="col-sm-3 col-form-label">Subject:</label>
          <div class="col-sm-9">
             <br><label>Select Subjects:</label><br>
               <label id="subject" required="required" ></label>


              </div>
             </div>
             
    </div>
     </div>
      
       <button type="submit" class="btn btn-primary" name="btnsub">Save</button>
        
          <button type="reset" class="btn btn-primary">Clear</button>
    
  </form>
       
 </div>
  
  

  </script>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
  $(document).ready(function(){
    $('#course').on('change',function(){
        var courseID = $(this).val();
        if(courseID){
        $.ajax({
                type:'post',
                url:'cands1.php',
                data:'c_id='+ courseID,
                success:function(html){
                    $('#subject').html(html);
                    //$('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            
            $('#subject').html('<label value="">Select Course first</label>');
            
           // $('#subject').html('<option value="">Select Course first</option>');
            //$('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
});
</script>

  </body>
</html>


      
    