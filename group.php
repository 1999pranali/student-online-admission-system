<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title></title>
   <!-- <script src="jquery.js"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


 <!--  <script type="text/javascript" src="first.js"></script>

  <script type="text/javascript" src="first.js"></script>
 -->
    <script type="text/javascript">
      function checkForm(yourinfo){
        var n = document.getElementsByName("chk[]");
        var c=0;
        for(var i=0;i<n.length;i++)
        {
          if(n[i].checked)
          {
            c++;
          }
        }
        if(c == 4)
        {
          return(true);
        }
        else{
          alert("please select only 4 subject");
          return(false);
        }
      }
    </script>
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
<div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Group Creation</div>
        <div class="card-body">
        <form method="POST" action="savegroup.php" name="info" onsubmit="return checkForm(document.info)">
         <div class="form-group">
            <div class="form-label-group">
               <label>Course Name:</label>
            <select  name="cid" class="form-control"  required="required" autofocus="autofocus" id="course">
                <?php
                
                include ("connection.php");
                $q="select * from course order by c_name ASC;";
                $result=mysqli_query($con,$q);
                $cn=mysqli_num_rows($result);
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
             
             <div class="form-group">
            <div class="form-label-group">
             <label>Select Subjects:</label><br>
             <label id="subject"></label>
            <!-- <select id="subject">
                    <option value="">Select Subject</option>
              </select>-->
              
              </div>
              </div>
             <button class="btn btn-primary btn-sm" type="submit" name="btnsub">Save Group</button>
              </div>
          </div>
          </div>
        
              </form></br></br>
         <table class="table">
        <thead class="thead-light">
         <tr>
         <th scope="col">Group Name</th>
         <th scope="col">Course Name</th>
         <th scope="col">Action</th>
        </tr>
         </thead>
         <tbody>
          <tr>
          <?php
            include("connection.php");
            $que="select s_id from group2 ;";
            $res=mysqli_query($con,$que);
            while($r=mysqli_fetch_row($res))
                {
                 $arr=explode(',', $r[0]);
                ?>
         <td><?php foreach($arr as $i) 
          {
            $sub="select s_name from subject where s_id=$i;";
            $rr=mysqli_query($con,$sub);
            $rrr=mysqli_fetch_row($rr);
            echo $rrr[0]. ",";}?>
              
        </td>
       <td><?php 
       $sub1="select c_name from course,subject where course.c_id=subject.c_id and subject.s_id=$arr[0];";
        $rr1=mysqli_query($con,$sub1);
        $rrr1=mysqli_fetch_row($rr1);

       echo $rrr1[0];?></td>

       <td><a href="deletegroup.php?id=<?php echo $r[0];?>"><button type="submit" class="btn btn-primary btn-sm" name="btndel" >Delete</button></a></td>
      
      
      </tr>
      <?php
        }
        ?>
           
  </tbody>
         </table>

</div>
</div>
            
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
                url:'group1.php',
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


      
    