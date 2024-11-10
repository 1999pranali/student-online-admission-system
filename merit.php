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
          
        include ("connection.php");             
      $q="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname from pinfo, academic,cands where edugap='No' and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc 
      ;";
          $result = mysqli_query($con,$q) or die(mysqli_error($con));
             while($r=mysqli_fetch_row($result))
             {
                  //echo $r[0]." "; 
                  // echo $r[1]." ";
                  // echo $r[2]." ";
                  // echo $r[3]." ";
                  // echo $r[4]." ";
                  // echo $r[5]." ";
                  // echo $r[6]." ";
                  // echo $r[7]."<br>"; 
                
                  $c="select cat2,g_name from gvck where g_name='$r[6]';";
                   $cc = mysqli_query($con,$c) or die(mysqli_error($con));
                   $ccc=mysqli_fetch_row($cc);
                    //$aa=$ccc[0];
                  $qq="select g_name,cat2.regino,castcat,clgname from gvck,cat2,cands,academic,pinfo where g_name='$r[6]' and cat2.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $ccc[0];";
                  $rr = mysqli_query($con,$qq) or die(mysqli_error($con));
                  while($rrr=mysqli_fetch_row($rr))
                  {
                  if($rrr[1] == $r[1])
                  {
                   
                  echo $rrr[0]." "; 
                  echo $rrr[1]." ";
                  echo $rrr[2]." ";
                  echo $rrr[3]."<br>";
                  // echo $rrr[3]." ";
                  // echo $rrr[4]." ";
                  // echo $rrr[5]." ";
                  // echo $rrr[6]." ";
                  //echo $rrr[3]."<br>"; 
                  }
                }

              $c1="select cat2,g_name from nvck where g_name='$r[6]';";
                   $cc1 = mysqli_query($con,$c1) or die(mysqli_error($con));
                   $ccc1=mysqli_fetch_row($cc1);
                    //$aa=$ccc[0];
                  $qq1="select g_name,cat2.regino,castcat,clgname from nvck,cat2,cands,academic,pinfo where g_name='$r[6]' and cat2.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $ccc[0],$ccc1[0];";
                  $rr1 = mysqli_query($con,$qq1) or die(mysqli_error($con));
                  while($rrr1=mysqli_fetch_row($rr1))
                  {
                  if($rrr1[1] == $r[1])
                  {
                   
                  echo $rrr1[0]." "; 
                  echo $rrr1[1]." ";
                  echo $rrr1[2]." ";
                  echo $rrr1[3]."<br>";
                  // echo $rrr[3]." ";
                  // echo $rrr[4]." ";
                  // echo $rrr[5]." ";
                  // echo $rrr[6]." ";
                  //echo $rrr[3]."<br>"; 
                  }
                }
                  

              //     $qq2="select *,regino from gvck,cat3 where g_name='$r[6]';";
              //     $rr2 = mysqli_query($con,$qq2) or die(mysqli_error($con));
              //     while($rrr2=mysqli_fetch_row($rr2))
              //     {
              //     if($rrr2[12] == $r[1])
              //     {
                    
              //     echo $r[0]." "; 
              //     echo $r[1]." ";
              //     echo $r[2]." ";
              //     echo $r[3]." ";
              //     echo $r[4]." ";
              //     echo $r[5]." ";
              //     echo $r[6]." ";
              //     echo $r[7]."<br>"; 
              //   }
              // }
                
                 
                 $cvj="select cat7,g_name from gvck where g_name='$r[6]';";
                   $ccvj = mysqli_query($con,$cvj) or die(mysqli_error($con));
                   $cccvj=mysqli_fetch_row($ccvj);
                    //$aa=$ccc[0];
                  $qqvj="select g_name,cat7.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat7,cands,academic,pinfo where g_name='$r[6]' and cat7.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccvj[0];";
                  $rrvj = mysqli_query($con,$qqvj) or die(mysqli_error($con));
                  while($rrrvj=mysqli_fetch_row($rrvj))
                  {
                  if($rrrvj[1] == $r[1])
                  {
                   echo $rrrvj[1]." "; 
                  echo $rrrvj[4]." ";
                  echo $rrrvj[2]." ";
                  echo $rrrvj[5]." ";
                  echo $rrrvj[6]." ";
                  echo $rrrvj[3]."<br>";
                  }
                }
                 $cvj2="select cat7,g_name from gother where g_name='$r[6]';";
                   $ccvj2 = mysqli_query($con,$cvj2) or die(mysqli_error($con));
                   $cccvj2=mysqli_fetch_row($ccvj2);
                    //$aa=$ccc[0];
                  $qqvj2="select g_name,cat7.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat7,cands,academic,pinfo where g_name='$r[6]' and cat7.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccvj2[0];";
                  $rrvj2= mysqli_query($con,$qqvj2) or die(mysqli_error($con));
                  while($rrrvj2=mysqli_fetch_row($rrvj2))
                  {
                  if($rrrvj2[1] == $r[1])
                  {
                   
                  echo $rrrvj2[1]." "; 
                  echo $rrrvj2[4]." ";
                  echo $rrrvj2[2]." ";
                  echo $rrrvj2[5]." ";
                  echo $rrrvj2[6]." ";
                  echo $rrrvj2[3]."<br>";
                  
                  }
                }

                                 $cvj3="select cat7,g_name from nvck where g_name='$r[6]';";
                   $ccvj3 = mysqli_query($con,$cvj3) or die(mysqli_error($con));
                   $cccvj3=mysqli_fetch_row($ccvj3);
                    //$aa=$ccc[0];
                  $qqvj3="select g_name,cat7.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat7,cands,academic,pinfo where g_name='$r[6]' and cat7.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccvj[0],$cccvj3[0];";
                  $rrvj3 = mysqli_query($con,$qqvj3) or die(mysqli_error($con));
                  while($rrrvj3=mysqli_fetch_row($rrvj3))
                  {
                  if($rrrvj3[1] == $r[1])
                  {
                   echo $rrrvj3[1]." "; 
                  echo $rrrvj3[4]." ";
                  echo $rrrvj3[2]." ";
                  echo $rrrvj3[5]." ";
                  echo $rrrvj3[6]." ";
                  echo $rrrvj3[3]."<br>";
                  }
                }
                 $cvj4="select cat7,g_name from nother where g_name='$r[6]';";
                   $ccvj4= mysqli_query($con,$cvj4) or die(mysqli_error($con));
                   $cccvj4=mysqli_fetch_row($ccvj4);
                    //$aa=$ccc[0];
                  $qqvj4="select g_name,cat7.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat7,cands,academic,pinfo where g_name='$r[6]' and cat7.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccvj2[0],$cccvj4[0];";
                  $rrvj4= mysqli_query($con,$qqvj4) or die(mysqli_error($con));
                  while($rrrvj4=mysqli_fetch_row($rrvj4))
                  {
                  if($rrrvj4[1] == $r[1])
                  {
                   
                  echo $rrrvj4[1]." "; 
                  echo $rrrvj4[4]." ";
                  echo $rrrvj4[2]." ";
                  echo $rrrvj4[5]." ";
                  echo $rrrvj4[6]." ";
                  echo $rrrvj4[3]."<br>";
                  
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

