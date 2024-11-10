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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

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
          </li> 
           <li class="nav-item dropdown"><a>Reports</a>
             <ul><li> <a href="yearwise.php">Yearwise General Merit List</a></li>
                <li> <a href="genmerit.php">Groupwise General Merit List</a></li>
                <li> <a href="castwise.php">Castwise General Merit List</a></li>
                <li> <a href="clgwise.php">Groupwise General Merit List with College Name</a></li>
                <li> <a href="castclg.php">Castwise General Merit List with College Name</a></li>
                <li> <a href="firstmerit.php">Groupwise First Merit List(Grantable)</a></li>
                 <li> <a href="firstmeritt.php">Groupwise First Merit List(Nongrantable )</a></li>
              </ul> </li> 
          
        </ul>
        </div>
        </div>
        </div>
<div class="col-8" >
   <div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Verification Form</div>
        <div class="card-body">
        <form action="vform2.php" method="POST">
          <div class="form-group">
            <div class="form-label-group">
          
            <label>Registration Number:</label>
           <input type="text" name="rno" class="form-control" placeholder="Registration Number" required="required" autofocus="autofocus" id="rno">
 
            </div>
            </div>
           
          
            <div class="form-group">
            <div class="form-label-group">
            
             <label id="form"></label>
            <!-- <select id="subject">
                    <option value="">Select Subject</option>
              </select>-->
              
              </div>
              </div>
              <input type="checkbox" name="chk" value="checked"><br>
              <button class="btn btn-primary btn-sm" type="submit" name="btn">Submit</button>
            
                
                </form>
        </div>
      </div>

</div>
  </div>      
   </div>   
 
    
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
  $(document).ready(function(){
    $('#rno').on('change',function(){
        var formID = $(this).val();
        if(formID){
        $.ajax({
                type:'post',
                url:'vform1.php',
                data:'aid='+ formID,
                success:function(html){
                    $('#form').html(html);
                    //$('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            
            $('#form').html('<label value="">Select verified forms first</label>');
            
           // $('#subject').html('<option value="">Select Course first</option>');
            //$('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
});
</script>

  </body>
</html>

