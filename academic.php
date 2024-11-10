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
          <li class="nav-item"><a href="academic.php">Academic Details</a></li>
          <li class="nav-item"><a href="">Course and Subject Details</a></li>
          
         
      </ul>
    </div>
    </div>
    <div class="col-9">
      <div class="row">
        <div class="col-8" ><h4>VIVEKANAND COLLEGE,KOLHAPUR(AUTONOMOUS)</h4></div>
        <div class="col-2"><h4> Wel-come <?php session_start(); echo $_SESSION['uname'];?></h4></div>
        <div class="col-2"><h4><img src="image/logout.jpg" width="20%"><a href="logout.php"> Log Out </a></h4></div>
       </div> 
       <div class="alert alert-primary" role="alert">
         Academic Details
        </div>
        <form method="POST" action="saveacademic.php">
        <div class="row" style="text-align: center;">
    <div class="col">
          <div class="form-group row">
           <label  class="col-sm-3 col-form-label">Last Exam Name:</label>
          <div class="col-sm-9">
         <select name="ename" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" id="clgname" >
              <option value="" >Select Last Exam Name</option>;
                <option value="HSC" name="ename" >HSC</option>
                </select>
              </div>
             </div>
          <div class="form-group row">
           <label class="col-sm-3 col-form-label">Name of Board:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="board" required="required" size="40%">
              </div>
             </div>
            <div class="form-group row">
           <label class="col-sm-3 col-form-label">Last Name of College:</label>
          <div class="col-sm-9">
         <select name="clgname" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" id="clgname" >
              <option value="" >Select College Name</option>;
                <option value="Vivekanand College,Kolhapur" name="clgname" >Vivekanand College,Kolhapur</option>
                <option value="Other" name="clgname">Other</option>
             </select>
                </div>
             </div>
             <div class="form-group row">
           <label class="col-sm-3 col-form-label" required="required">Educational Gap:</label>
          <div >
          <input type="radio" name="radio1" value="Yes">Yes<br>
          <input type="radio" name="radio1" value="No">No
          </div></div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label">If yes give reason:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="reason" size="40%">
          </div>
          </div>
             
    </div>
    <div class="col">
      <div class="form-group row">
           <label class="col-sm-3 col-form-label">Exam Seat Number:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="examseat" required="required" size="40%">
              </div>
             </div>
            
            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Total Marks:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="marks1" required="required" size="40%" id="total">
              </div>
            </div>
            <div class="form-group row">
           <label  class="col-sm-3 col-form-label">Out of:</label>
          <div class="col-sm-9">
           <select name="marks2" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required" style="width: 90%;" id="outof" >
              <option value="" >Select Out of marks</option>;
                <option value="650" name="marks2" > 650</option>
                <option value="500" name="marks2">500</option>
             </select>
              </div></div>
              <div class="form-group row">
           <label class="col-sm-3 col-form-label">Percentage:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="per" size="40%" id="percentage">
              </div></div>
            
              <div class="form-group row">
           <label class="col-sm-3 col-form-label">Year of Passing:</label>
          <div class="col-sm-9">
          <input type="text" class="d-inline-flex p-2 bd-highlight" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="passing" required="required" size="40%">
              </div>
             </div>
          
    </div>
    </div>
    <button type="submit" class="btn btn-primary" name="btnsub">Save and Next</button>
          <button type="submit" class="btn btn-primary">Clear</button>
    
  </form>
    </div>   
 </div>
  
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
   $(document).ready(function(){
    $('#percentage').focus(function(){
      var t1 = +$('#total').val();
      var t2 = +$("#outof option:selected").text();
      //alert(t2);
      //alert(t1);
      //alert($("#outof option:selected").text());
      var i = ((t1/t2)*100);
      //alert(i);
      $('#percentage').val(i);

      });
    });
</script>


  </body>
</html>


      
    