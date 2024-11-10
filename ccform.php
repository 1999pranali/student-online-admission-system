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
           <li class="nav-item dropdown"><a>Admission Form</a>
              <ul><li> <a href="vform.php">Verification Form</a></li>
                <li><a href="cform.php">Confirm Form</a></li>
             </ul> 
          </li> 
          
        </ul>
        </div>
        </div>
        </div>
        <div class="col-8">

        <?php
          
           // $query="select regino from verify where status='verified'";
           //  $result = mysqli_query($con,$query) or die(mysqli_error($con));
           //   while($r=mysqli_fetch_row($result))
           //   {
           //      $query1="select r_id from cands where cands.regino ='$r[0]'";
           //      $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
           //      $rr=mysqli_fetch_array($result1);
                 
           //         $q="select * from pinfo,academic,cands where cands.r_id=$rr[0] and pinfo.r_id=$rr[0] and academic.r_id=$rr[0] and academic.edugap='No' order by academic.percentage;";
           //          $res = mysqli_query($con,$q) or die(mysqli_error($con));
           //          $rrr=mysqli_fetch_array($res);
           //            echo $rrr[2]." ";
           //            echo $rrr[12]." ";
           //            echo $rrr[26]."<br>";
           //          $m="select * from gtotal where g_name='$rrr[30]'";  
           //          $mm=mysqli_query($con,$m) or die(mysqli_error($con));
           //          $mmm=mysqli_fetch_array($mm);
                    

        include ("connection.php");             
      $q="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat ;";
          $result = mysqli_query($con,$q) or die(mysqli_error($con));
             while($r=mysqli_fetch_row($result))
             {
                  // echo $r[0]." "; 
                  // echo $r[1]." ";
                  // echo $r[2]." ";
                  // echo $r[3]." ";
                  // echo $r[4]." ";
                  // echo $r[5]." ";
                  // echo $r[6]." ";
                  // echo $r[7]."<br>"; 

                  $qq="select * from gvck where g_name='$r[6]';";
                  $rr = mysqli_query($con,$qq) or die(mysqli_error($con));
                  $rrr=mysqli_fetch_row($rr);
                  
                  if($r[3]=='NT-B')
                  {
                    
                    //echo $r[0]." "; 
                    //echo $r[1]." ";
                    //echo $r[2]." ";
                    //echo $r[7]." ";
                    //echo $r[3]."<br>"; 

                 
                  }
                   if($r[3]=='ST'){
                    // echo $r[0]." "; 
                   echo $r[1]." ";
                    // echo $r[2]." ";
                    // echo $r[7]." ";
                     echo $r[3]."<br>"; 
                   }
          }
        
       // $q="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified');";
          
       //  $p="select cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage from pinfo, academic,cands;";
                  //  $pp = mysqli_query($con,$p) or die(mysqli_error($con));
                  // $ppp=mysqli_fetch_row($pp);
                
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

<!-- <!doctype html>
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
           <li class="nav-item dropdown"><a>Admission Form</a>
              <ul><li> <a href="vform.php">Verification Form</a></li>
                <li><a href="cform.php">Confirm Form</a></li>
             </ul> 
          </li> 
          
        </ul>
        </div>
        </div>
        </div>
        <div class="col-8">

        <?php
          
        include ("connection.php");             
      $q="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat ;";
          $result = mysqli_query($con,$q) or die(mysqli_error($con));
             while($r=mysqli_fetch_row($result))
             {
                  // echo $r[0]." "; 
                  // echo $r[1]." ";
                  // echo $r[2]." ";
                  // echo $r[3]." ";
                  // echo $r[4]." ";
                  // echo $r[5]." ";
                  // echo $r[6]." ";
                  // echo $r[7]."<br>"; 

                  $qq="select *,regino from gvck,cat2 where g_name='$r[6]';";
                  $rr = mysqli_query($con,$qq) or die(mysqli_error($con));
                  while($rrr=mysqli_fetch_row($rr))
                  {
                  if($rrr[12] == $r[1])
                  {
                    //echo $rrr[12];
                    echo $r[0]." "; 
                  echo $r[1]." ";
                  echo $r[2]." ";
                  echo $r[3]." ";
                  echo $r[4]." ";
                  echo $r[5]." ";
                  echo $r[6]." ";
                  echo $r[7]."<br>"; 


                  //   $cat2="select pinfo.r_id,cat2.regino,concat(lname,' ',fname,' ',mname) as Name,castcat, percentage,subject,clgname,cands.r_id from pinfo,academic,cands,cat2 where cat2.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY percentage ;";
                  //    $ccr2 = mysqli_query($con,$cat2) or die(mysqli_error($con));
                  //    $cr2=mysqli_fetch_row($ccr2);
                  // echo $cr2[0]." "; 
                  // echo $cr2[1]." ";
                  // echo $cr2[2]." ";
                  // echo $cr2[3]." ";
                  // echo $cr2[4]." ";
                  // echo $cr2[5]." ";
                  // //echo $cr2[6]." ";
                  // echo $cr2[6]."<br>";

                  }
                }
                  $qq2="select *,regino from gvck,cat3 where g_name='$r[6]';";
                  $rr2 = mysqli_query($con,$qq2) or die(mysqli_error($con));
                  while($rrr2=mysqli_fetch_row($rr2))
                  {
                  if($rrr2[12] == $r[1])
                  {
                    //echo $rrr[12];
                    echo $r[0]." "; 
                  echo $r[1]." ";
                  echo $r[2]." ";
                  echo $r[3]." ";
                  echo $r[4]." ";
                  echo $r[5]." ";
                  echo $r[6]." ";
                  echo $r[7]."<br>"; 
                }
              }
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

 -->