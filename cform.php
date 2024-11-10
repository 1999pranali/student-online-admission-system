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
                  // echo $r[0]." "; 
                  // echo $r[1]." ";
                  // echo $r[2]." ";
                  // echo $r[3]." ";
                  // echo $r[4]." ";
                  // echo $r[5]." ";
                  // echo $r[6]." ";
                  // echo $r[7]."<br>"; 
                 $ce="select cat1,g_name from gvck where g_name='$r[6]';";
                   $cce = mysqli_query($con,$ce) or die(mysqli_error($con));
                   $ccce=mysqli_fetch_row($cce);
                    //$aa=$ccc[0];
                  $qqe="select g_name,cat1.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat1,cands,academic,pinfo where g_name='$r[6]' and cat1.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $ccce[0];";
                  $rre = mysqli_query($con,$qqe) or die(mysqli_error($con));
                  while($rrre=mysqli_fetch_row($rre))
                  {
                  if($rrre[1] == $r[1])
                  {
                   echo $rrre[1]." "; 
                  echo $rrre[4]." ";
                  echo $rrre[2]." ";
                  echo $rrre[5]." ";
                  echo $rrre[6]." ";
                  echo $rrre[3]."<br>";
                  }
                }
                $ce2="select cat1,g_name from gother where g_name='$r[6]';";
                   $cce2 = mysqli_query($con,$ce2) or die(mysqli_error($con));
                   $ccce2=mysqli_fetch_row($cce2);
                    //$aa=$ccc[0];
                  $qqe2="select g_name,cat1.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat1,cands,academic,pinfo where g_name='$r[6]' and cat1.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $ccce2[0];";
                  $rre2= mysqli_query($con,$qqe2) or die(mysqli_error($con));
                  while($rrre2=mysqli_fetch_row($rre2))
                  {
                  if($rrre2[1] == $r[1])
                  {
                   
                  echo $rrre2[1]." "; 
                  echo $rrre2[4]." ";
                  echo $rrre2[2]." ";
                  echo $rrre2[5]." ";
                  echo $rrre2[6]." ";
                  echo $rrre2[3]."<br>";
                  
                  }
                }
                 $cb="select cat2,g_name from gvck where g_name='$r[6]';";
                   $ccb = mysqli_query($con,$cb) or die(mysqli_error($con));
                   $cccb=mysqli_fetch_row($ccb);
                    //$aa=$ccc[0];
                  $qqb="select g_name,cat2.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat2,cands,academic,pinfo where g_name='$r[6]' and cat2.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccb[0];";
                  $rrb = mysqli_query($con,$qqb) or die(mysqli_error($con));
                  while($rrrb=mysqli_fetch_row($rrb))
                  {
                  if($rrrb[1] == $r[1])
                  {
                   echo $rrrb[1]." "; 
                  echo $rrrb[4]." ";
                  echo $rrrb[2]." ";
                  echo $rrrb[5]." ";
                  echo $rrrb[6]." ";
                  echo $rrrb[3]."<br>";
                  }
                }
                 $cb2="select cat2,g_name from gother where g_name='$r[6]';";
                   $ccb2 = mysqli_query($con,$cb2) or die(mysqli_error($con));
                   $cccb2=mysqli_fetch_row($ccb2);
                    //$aa=$ccc[0];
                  $qqb2="select g_name,cat2.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat2,cands,academic,pinfo where g_name='$r[6]' and cat2.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccb2[0];";
                  $rrb2= mysqli_query($con,$qqb2) or die(mysqli_error($con));
                  while($rrrb2=mysqli_fetch_row($rrb2))
                  {
                  if($rrrb2[1] == $r[1])
                  {
                   
                  echo $rrrb2[1]." "; 
                  echo $rrrb2[4]." ";
                  echo $rrrb2[2]." ";
                  echo $rrrb2[5]." ";
                  echo $rrrb2[6]." ";
                  echo $rrrb2[3]."<br>";
                  
                  }
                }
                  $cbc="select cat3,g_name from gvck where g_name='$r[6]';";
                   $ccbc = mysqli_query($con,$cbc) or die(mysqli_error($con));
                   $cccbc=mysqli_fetch_row($ccbc);
                    //$aa=$ccc[0];
                  $qqbc="select g_name,cat3.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat3,cands,academic,pinfo where g_name='$r[6]' and cat3.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccbc[0];";
                  $rrbc = mysqli_query($con,$qqbc) or die(mysqli_error($con));
                  while($rrrbc=mysqli_fetch_row($rrbc))
                  {
                  if($rrrbc[1] == $r[1])
                  {
                   echo $rrrbc[1]." "; 
                  echo $rrrbc[4]." ";
                  echo $rrrbc[2]." ";
                  echo $rrrbc[5]." ";
                  echo $rrrbc[6]." ";
                  echo $rrrbc[3]."<br>";
                  }
                }
                 $cbc2="select cat3,g_name from gother where g_name='$r[6]';";
                   $ccbc2 = mysqli_query($con,$cbc2) or die(mysqli_error($con));
                   $cccbc2=mysqli_fetch_row($ccbc2);
                    //$aa=$ccc[0];
                  $qqbc2="select g_name,cat3.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat3,cands,academic,pinfo where g_name='$r[6]' and cat3.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccbc2[0];";
                  $rrbc2= mysqli_query($con,$qqbc2) or die(mysqli_error($con));
                  while($rrrbc2=mysqli_fetch_row($rrbc2))
                  {
                  if($rrrbc2[1] == $r[1])
                  {
                   
                  echo $rrrbc2[1]." "; 
                  echo $rrrbc2[4]." ";
                  echo $rrrbc2[2]." ";
                  echo $rrrbc2[5]." ";
                  echo $rrrbc2[6]." ";
                  echo $rrrbc2[3]."<br>";
                  
                  }
                }
                $cd="select cat4,g_name from gvck where g_name='$r[6]';";
                   $ccd = mysqli_query($con,$cd) or die(mysqli_error($con));
                   $cccd=mysqli_fetch_row($ccd);
                    //$aa=$ccc[0];
                  $qqd="select g_name,cat4.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat4,cands,academic,pinfo where g_name='$r[6]' and cat4.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccd[0];";
                  $rrd = mysqli_query($con,$qqd) or die(mysqli_error($con));
                  while($rrrd=mysqli_fetch_row($rrd))
                  {
                  if($rrrd[1] == $r[1])
                  {
                   echo $rrrd[1]." "; 
                  echo $rrrd[4]." ";
                  echo $rrrd[2]." ";
                  echo $rrrd[5]." ";
                  echo $rrrd[6]." ";
                  echo $rrrd[3]."<br>";
                  }
                }
                 $cd2="select cat4,g_name from gother where g_name='$r[6]';";
                   $ccd2 = mysqli_query($con,$cd2) or die(mysqli_error($con));
                   $cccd2=mysqli_fetch_row($ccd2);
                    //$aa=$ccc[0];
                  $qqd2="select g_name,cat4.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat4,cands,academic,pinfo where g_name='$r[6]' and cat4.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccd2[0];";
                  $rrd2= mysqli_query($con,$qqd2) or die(mysqli_error($con));
                  while($rrrd2=mysqli_fetch_row($rrd2))
                  {
                  if($rrrd2[1] == $r[1])
                  {
                   
                  echo $rrrd2[1]." "; 
                  echo $rrrd2[4]." ";
                  echo $rrrd2[2]." ";
                  echo $rrrd2[5]." ";
                  echo $rrrd2[6]." ";
                  echo $rrrd2[3]."<br>";
                  
                  }
                }
                $co="select cat5,g_name from gvck where g_name='$r[6]';";
                   $cco = mysqli_query($con,$co) or die(mysqli_error($con));
                   $ccco=mysqli_fetch_row($cco);
                    //$aa=$ccc[0];
                  $qqo="select g_name,cat5.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat5,cands,academic,pinfo where g_name='$r[6]' and cat5.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $ccco[0];";
                  $rro = mysqli_query($con,$qqo) or die(mysqli_error($con));
                  while($rrro=mysqli_fetch_row($rro))
                  {
                  if($rrro[1] == $r[1])
                  {
                   echo $rrro[1]." "; 
                  echo $rrro[4]." ";
                  echo $rrro[2]." ";
                  echo $rrro[5]." ";
                  echo $rrro[6]." ";
                  echo $rrro[3]."<br>";
                  }
                }
                 $co2="select cat5,g_name from gother where g_name='$r[6]';";
                   $cco2 = mysqli_query($con,$co2) or die(mysqli_error($con));
                   $ccco2=mysqli_fetch_row($cco2);
                    //$aa=$ccc[0];
                  $qqo2="select g_name,cat5.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat5,cands,academic,pinfo where g_name='$r[6]' and cat5.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $ccco2[0];";
                  $rro2= mysqli_query($con,$qqo2) or die(mysqli_error($con));
                  while($rrro2=mysqli_fetch_row($rro2))
                  {
                  if($rrro2[1] == $r[1])
                  {
                   
                  echo $rrro2[1]." "; 
                  echo $rrro2[4]." ";
                  echo $rrro2[2]." ";
                  echo $rrro2[5]." ";
                  echo $rrro2[6]." ";
                  echo $rrro2[3]."<br>";
                  
                  }
                }

               $cop="select cat6,g_name from gvck where g_name='$r[6]';";
                   $ccop = mysqli_query($con,$cop) or die(mysqli_error($con));
                   $cccop=mysqli_fetch_row($ccop);
                    //$aa=$ccc[0];
                  $qqop="select g_name,cat6.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat6,cands,academic,pinfo where g_name='$r[6]' and cat6.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccop[0];";
                  $rrop = mysqli_query($con,$qqop) or die(mysqli_error($con));
                  while($rrrop=mysqli_fetch_row($rrop))
                  {
                  if($rrrop[1] == $r[1])
                  {
                   echo $rrrop[1]." "; 
                  echo $rrrop[4]." ";
                  echo $rrrop[2]." ";
                  echo $rrrop[5]." ";
                  echo $rrrop[6]." ";
                  echo $rrrop[3]."<br>";
                  }
                }
                 $cop2="select cat6,g_name from gother where g_name='$r[6]';";
                   $ccop2 = mysqli_query($con,$cop2) or die(mysqli_error($con));
                   $cccop2=mysqli_fetch_row($ccop2);
                    //$aa=$ccc[0];
                  $qqop2="select g_name,cat6.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat6,cands,academic,pinfo where g_name='$r[6]' and cat6.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccop2[0];";
                  $rrop2= mysqli_query($con,$qqop2) or die(mysqli_error($con));
                  while($rrrop2=mysqli_fetch_row($rrop2))
                  {
                  if($rrrop2[1] == $r[1])
                  {
                   
                  echo $rrrop2[1]." "; 
                  echo $rrrop2[4]." ";
                  echo $rrrop2[2]." ";
                  echo $rrrop2[5]." ";
                  echo $rrrop2[6]." ";
                  echo $rrrop2[3]."<br>";
                  
                  }
                }
               
                $csc="select cat7,g_name from gvck where g_name='$r[6]';";
                   $ccsc = mysqli_query($con,$csc) or die(mysqli_error($con));
                   $cccsc=mysqli_fetch_row($ccsc);
                    //$aa=$ccc[0];
                  $qqsc="select g_name,cat7.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat7,cands,academic,pinfo where g_name='$r[6]' and cat7.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccsc[0];";
                  $rrsc = mysqli_query($con,$qqsc) or die(mysqli_error($con));
                  while($rrrsc=mysqli_fetch_row($rrsc))
                  {
                  if($rrrsc[1] == $r[1])
                  {
                   echo $rrrsc[1]." "; 
                  echo $rrrsc[4]." ";
                  echo $rrrsc[2]." ";
                  echo $rrrsc[5]." ";
                  echo $rrrsc[6]." ";
                  echo $rrrsc[3]."<br>";
                  }
                }
                 $csc2="select cat7,g_name from gother where g_name='$r[6]';";
                   $ccsc2 = mysqli_query($con,$csc2) or die(mysqli_error($con));
                   $cccsc2=mysqli_fetch_row($ccsc2);
                    //$aa=$ccc[0];
                  $qqsc2="select g_name,cat7.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat7,cands,academic,pinfo where g_name='$r[6]' and cat7.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccsc2[0];";
                  $rrsc2= mysqli_query($con,$qqsc2) or die(mysqli_error($con));
                  while($rrrsc2=mysqli_fetch_row($rrsc2))
                  {
                  if($rrrsc2[1] == $r[1])
                  {
                   
                  echo $rrrsc2[1]." "; 
                  echo $rrrsc2[4]." ";
                  echo $rrrsc2[2]." ";
                  echo $rrrsc2[5]." ";
                  echo $rrrsc2[6]." ";
                  echo $rrrsc2[3]."<br>";
                  
                  }
                }
               $cse="select cat8,g_name from gvck where g_name='$r[6]';";
                   $ccse = mysqli_query($con,$cse) or die(mysqli_error($con));
                   $cccse=mysqli_fetch_row($ccse);
                    //$aa=$ccc[0];
                  $qqse="select g_name,cat8.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat8,cands,academic,pinfo where g_name='$r[6]' and cat8.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccse[0];";
                  $rrse = mysqli_query($con,$qqse) or die(mysqli_error($con));
                  while($rrrse=mysqli_fetch_row($rrse))
                  {
                  if($rrrse[1] == $r[1])
                  {
                   echo $rrrse[1]." "; 
                  echo $rrrse[4]." ";
                  echo $rrrse[2]." ";
                  echo $rrrse[5]." ";
                  echo $rrrse[6]." ";
                  echo $rrrse[3]."<br>";
                  }
                }
                 $cse2="select cat8,g_name from gother where g_name='$r[6]';";
                   $ccse2 = mysqli_query($con,$cse2) or die(mysqli_error($con));
                   $cccse2=mysqli_fetch_row($ccse2);
                    //$aa=$ccc[0];
                  $qqse2="select g_name,cat8.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat8,cands,academic,pinfo where g_name='$r[6]' and cat8.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccse2[0];";
                  $rrse2= mysqli_query($con,$qqse2) or die(mysqli_error($con));
                  while($rrrse2=mysqli_fetch_row($rrse2))
                  {
                  if($rrrse2[1] == $r[1])
                  {
                   
                  echo $rrrse2[1]." "; 
                  echo $rrrse2[4]." ";
                  echo $rrrse2[2]." ";
                  echo $rrrse2[5]." ";
                  echo $rrrse2[6]." ";
                  echo $rrrse2[3]."<br>";
                  
                  }
                }
               $cst="select cat9,g_name from gvck where g_name='$r[6]';";
                   $ccst = mysqli_query($con,$cst) or die(mysqli_error($con));
                   $cccst=mysqli_fetch_row($ccst);
                    //$aa=$ccc[0];
                  $qqst="select g_name,cat9.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat9,cands,academic,pinfo where g_name='$r[6]' and cat9.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccst[0];";
                  $rrst = mysqli_query($con,$qqst) or die(mysqli_error($con));
                  while($rrrst=mysqli_fetch_row($rrst))
                  {
                  if($rrrst[1] == $r[1])
                  {
                   echo $rrrst[1]." "; 
                  echo $rrrst[4]." ";
                  echo $rrrst[2]." ";
                  echo $rrrst[5]." ";
                  echo $rrrst[6]." ";
                  echo $rrrst[3]."<br>";
                  }
                }
                 $cst2="select cat9,g_name from gother where g_name='$r[6]';";
                   $ccst2 = mysqli_query($con,$cst2) or die(mysqli_error($con));
                   $cccst2=mysqli_fetch_row($ccst2);
                    //$aa=$ccc[0];
                  $qqst2="select g_name,cat9.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat9,cands,academic,pinfo where g_name='$r[6]' and cat9.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccst2[0];";
                  $rrst2= mysqli_query($con,$qqst2) or die(mysqli_error($con));
                  while($rrrst2=mysqli_fetch_row($rrst2))
                  {
                  if($rrrst2[1] == $r[1])
                  {
                   
                  echo $rrrst2[1]." "; 
                  echo $rrrst2[4]." ";
                  echo $rrrst2[2]." ";
                  echo $rrrst2[5]." ";
                  echo $rrrst2[6]." ";
                  echo $rrrst2[3]."<br>";
                  
                  }
                }
               
               $cvj="select cat10,g_name from gvck where g_name='$r[6]';";
                   $ccvj = mysqli_query($con,$cvj) or die(mysqli_error($con));
                   $cccvj=mysqli_fetch_row($ccvj);
                    //$aa=$ccc[0];
                  $qqvj="select g_name,cat10.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gvck,cat10,cands,academic,pinfo where g_name='$r[6]' and cat10.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccvj[0];";
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
                 $cvj2="select cat10,g_name from gother where g_name='$r[6]';";
                   $ccvj2 = mysqli_query($con,$cvj2) or die(mysqli_error($con));
                   $cccvj2=mysqli_fetch_row($ccvj2);
                    //$aa=$ccc[0];
                  $qqvj2="select g_name,cat10.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from gother,cat10,cands,academic,pinfo where g_name='$r[6]' and cat10.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccvj2[0];";
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


                   $ce1="select cat1,g_name from nvck where g_name='$r[6]';";
                   $cce1 = mysqli_query($con,$ce1) or die(mysqli_error($con));
                   $ccce1=mysqli_fetch_row($cce1);
                  $qqe1="select g_name,cat1.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat1,cands,academic,pinfo where g_name='$r[6]' and cat1.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $ccce[0],$ccce1[0];";
                  $rre1 = mysqli_query($con,$qqe1) or die(mysqli_error($con));
                  while($rrre1=mysqli_fetch_row($rre1))
                  {
                  if($rrre1[1] == $r[1])
                  {
                   echo $rrre1[1]." "; 
                  echo $rrre1[4]." ";
                  echo $rrre1[2]." ";
                  echo $rrre1[5]." ";
                  echo $rrre1[6]." ";
                  echo $rrre1[3]."<br>";
                  }
                }
                
                   $c3="select cat1,g_name from nother where g_name='$r[6]';";
                   $cc3 = mysqli_query($con,$c3) or die(mysqli_error($con));
                   $ccc3=mysqli_fetch_row($cc3);
                    //$aa=$ccc[0];
                  $qq3="select g_name,cat1.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat1,cands,academic,pinfo where g_name='$r[6]' and cat1.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $ccce2[0],$ccc3[0];";
                  $rr3 = mysqli_query($con,$qq3) or die(mysqli_error($con));
                  while($rrr3=mysqli_fetch_row($rr3))
                  {
                  if($rrr3[1] == $r[1])
                  {
                   
                  echo $rrr3[1]." "; 
                  echo $rrr3[4]." ";
                  echo $rrr3[2]." ";
                  echo $rrr3[5]." ";
                  echo $rrr3[6]." ";
                  echo $rrr3[3]."<br>";
                  }
                }
                  $cb1="select cat2,g_name from nvck where g_name='$r[6]';";
                   $ccb1 = mysqli_query($con,$cb1) or die(mysqli_error($con));
                   $cccb1=mysqli_fetch_row($ccb1);
                  $qqb1="select g_name,cat2.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat2,cands,academic,pinfo where g_name='$r[6]' and cat2.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccb[0],$cccb1[0];";
                  $rrb1 = mysqli_query($con,$qqb1) or die(mysqli_error($con));
                  while($rrrb1=mysqli_fetch_row($rrb1))
                  {
                  if($rrrb1[1] == $r[1])
                  {
                   echo $rrrb1[1]." "; 
                  echo $rrrb1[4]." ";
                  echo $rrrb1[2]." ";
                  echo $rrrb1[5]." ";
                  echo $rrrb1[6]." ";
                  echo $rrrb1[3]."<br>";
                  }
                }
                   $cb3="select cat2,g_name from nother where g_name='$r[6]';";
                   $ccb3 = mysqli_query($con,$cb3) or die(mysqli_error($con));
                   $cccb3=mysqli_fetch_row($ccb3);
                    //$aa=$ccc[0];
                  $qqb3="select g_name,cat2.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat2,cands,academic,pinfo where g_name='$r[6]' and cat2.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccb2[0],$cccb3[0];";
                  $rrb3 = mysqli_query($con,$qqb3) or die(mysqli_error($con));
                  while($rrrb3=mysqli_fetch_row($rrb3))
                  {
                  if($rrrb3[1] == $r[1])
                  {
                   
                  echo $rrrb3[1]." "; 
                  echo $rrrb3[4]." ";
                  echo $rrrb3[2]." ";
                  echo $rrrb3[5]." ";
                  echo $rrrb3[6]." ";
                  echo $rrrb3[3]."<br>";
                  }
                }
                 $cbc3="select cat3,g_name from nvck where g_name='$r[6]';";
                   $ccbc3 = mysqli_query($con,$cbc3) or die(mysqli_error($con));
                   $cccbc3=mysqli_fetch_row($ccbc3);
                    //$aa=$ccc[0];
                  $qqbc3="select g_name,cat3.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat3,cands,academic,pinfo where g_name='$r[6]' and cat3.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccbc[0],$cccbc3[0];";
                  $rrbc3 = mysqli_query($con,$qqbc3) or die(mysqli_error($con));
                  while($rrrbc3=mysqli_fetch_row($rrbc3))
                  {
                  if($rrrbc3[1] == $r[1])
                  {
                   echo $rrrbc3[1]." "; 
                  echo $rrrbc3[4]." ";
                  echo $rrrbc3[2]." ";
                  echo $rrrbc3[5]." ";
                  echo $rrrbc3[6]." ";
                  echo $rrrbc3[3]."<br>";
                  }
                }
                 $cbc4="select cat3,g_name from nother where g_name='$r[6]';";
                   $ccbc4= mysqli_query($con,$cbc4) or die(mysqli_error($con));
                   $cccbc4=mysqli_fetch_row($ccbc4);
                    //$aa=$ccc[0];
                  $qqbc4="select g_name,cat3.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat3,cands,academic,pinfo where g_name='$r[6]' and cat3.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccbc2[0],$cccbc4[0];";
                  $rrbc4= mysqli_query($con,$qqbc4) or die(mysqli_error($con));
                  while($rrrbc4=mysqli_fetch_row($rrbc4))
                  {
                  if($rrrbc4[1] == $r[1])
                  {
                   
                  echo $rrrbc4[1]." "; 
                  echo $rrrbc4[4]." ";
                  echo $rrrbc4[2]." ";
                  echo $rrrbc4[5]." ";
                  echo $rrrbc4[6]." ";
                  echo $rrrbc4[3]."<br>";
                  
                  }
                }
                 $cd3="select cat4,g_name from nvck where g_name='$r[6]';";
                   $ccd3 = mysqli_query($con,$cd3) or die(mysqli_error($con));
                   $cccd3=mysqli_fetch_row($ccd3);
                    //$aa=$ccc[0];
                  $qqd3="select g_name,cat4.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat4,cands,academic,pinfo where g_name='$r[6]' and cat4.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccd[0],$cccd3[0];";
                  $rrd3 = mysqli_query($con,$qqd3) or die(mysqli_error($con));
                  while($rrrd3=mysqli_fetch_row($rrd3))
                  {
                  if($rrrd3[1] == $r[1])
                  {
                   echo $rrrd3[1]." "; 
                  echo $rrrd3[4]." ";
                  echo $rrrd3[2]." ";
                  echo $rrrd3[5]." ";
                  echo $rrrd3[6]." ";
                  echo $rrrd3[3]."<br>";
                  }
                }
                 $cd4="select cat4,g_name from nother where g_name='$r[6]';";
                   $ccd4= mysqli_query($con,$cd4) or die(mysqli_error($con));
                   $cccd4=mysqli_fetch_row($ccd4);
                    //$aa=$ccc[0];
                  $qqd4="select g_name,cat4.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat4,cands,academic,pinfo where g_name='$r[6]' and cat4.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccd2[0],$cccd4[0];";
                  $rrd4= mysqli_query($con,$qqd4) or die(mysqli_error($con));
                  while($rrrd4=mysqli_fetch_row($rrd4))
                  {
                  if($rrrd4[1] == $r[1])
                  {
                   
                  echo $rrrd4[1]." "; 
                  echo $rrrd4[4]." ";
                  echo $rrrd4[2]." ";
                  echo $rrrd4[5]." ";
                  echo $rrrd4[6]." ";
                  echo $rrrd4[3]."<br>";
                  
                  }
                }
                  $co3="select cat5,g_name from nvck where g_name='$r[6]';";
                     $cco3 = mysqli_query($con,$co3) or die(mysqli_error($con));
                     $ccco3=mysqli_fetch_row($cco3);
                      //$aa=$ccc[0];
                    $qqo3="select g_name,cat5.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat5,cands,academic,pinfo where g_name='$r[6]' and cat5.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $ccco[0],$ccco3[0];";
                    $rro3 = mysqli_query($con,$qqo3) or die(mysqli_error($con));
                    while($rrro3=mysqli_fetch_row($rro3))
                    {
                    if($rrro3[1] == $r[1])
                    {
                     echo $rrro3[1]." "; 
                    echo $rrro3[4]." ";
                    echo $rrro3[2]." ";
                    echo $rrro3[5]." ";
                    echo $rrro3[6]." ";
                    echo $rrro3[3]."<br>";
                    }
                  }
                   $co4="select cat5,g_name from nother where g_name='$r[6]';";
                     $cco4= mysqli_query($con,$co4) or die(mysqli_error($con));
                     $ccco4=mysqli_fetch_row($cco4);
                      //$aa=$ccc[0];
                    $qqo4="select g_name,cat5.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat5,cands,academic,pinfo where g_name='$r[6]' and cat5.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $ccco2[0],$ccco4[0];";
                    $rro4= mysqli_query($con,$qqo4) or die(mysqli_error($con));
                    while($rrro4=mysqli_fetch_row($rro4))
                    {
                    if($rrro4[1] == $r[1])
                    {
                     
                    echo $rrro4[1]." "; 
                    echo $rrro4[4]." ";
                    echo $rrro4[2]." ";
                    echo $rrro4[5]." ";
                    echo $rrro4[6]." ";
                    echo $rrro4[3]."<br>";
                    
                    }
                  }
                  $cop3="select cat6,g_name from nvck where g_name='$r[6]';";
                   $ccop3 = mysqli_query($con,$cop3) or die(mysqli_error($con));
                   $cccop3=mysqli_fetch_row($ccop3);
                    //$aa=$ccc[0];
                  $qqop3="select g_name,cat6.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat6,cands,academic,pinfo where g_name='$r[6]' and cat6.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccop[0],$cccop3[0];";
                  $rrop3 = mysqli_query($con,$qqop3) or die(mysqli_error($con));
                  while($rrrop3=mysqli_fetch_row($rrop3))
                  {
                  if($rrrop3[1] == $r[1])
                  {
                   echo $rrrop3[1]." "; 
                  echo $rrrop3[4]." ";
                  echo $rrrop3[2]." ";
                  echo $rrrop3[5]." ";
                  echo $rrrop3[6]." ";
                  echo $rrrop3[3]."<br>";
                  }
                }
                 $cop4="select cat6,g_name from nother where g_name='$r[6]';";
                   $ccop4= mysqli_query($con,$cop4) or die(mysqli_error($con));
                   $cccop4=mysqli_fetch_row($ccop4);
                    //$aa=$ccc[0];
                  $qqop4="select g_name,cat6.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat6,cands,academic,pinfo where g_name='$r[6]' and cat6.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccop2[0],$cccop4[0];";
                  $rrop4= mysqli_query($con,$qqop4) or die(mysqli_error($con));
                  while($rrrop4=mysqli_fetch_row($rrop4))
                  {
                  if($rrrop4[1] == $r[1])
                  {
                   
                  echo $rrrop4[1]." "; 
                  echo $rrrop4[4]." ";
                  echo $rrrop4[2]." ";
                  echo $rrrop4[5]." ";
                  echo $rrrop4[6]." ";
                  echo $rrrop4[3]."<br>";
                  
                  }
                }
                $csc3="select cat7,g_name from nvck where g_name='$r[6]';";
                   $ccsc3 = mysqli_query($con,$csc3) or die(mysqli_error($con));
                   $cccsc3=mysqli_fetch_row($ccsc3);
                    //$aa=$ccc[0];
                  $qqsc3="select g_name,cat7.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat7,cands,academic,pinfo where g_name='$r[6]' and cat7.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccsc[0],$cccsc3[0];";
                  $rrsc3 = mysqli_query($con,$qqsc3) or die(mysqli_error($con));
                  while($rrrsc3=mysqli_fetch_row($rrsc3))
                  {
                  if($rrrsc3[1] == $r[1])
                  {
                   echo $rrrsc3[1]." "; 
                  echo $rrrsc3[4]." ";
                  echo $rrrsc3[2]." ";
                  echo $rrrsc3[5]." ";
                  echo $rrrsc3[6]." ";
                  echo $rrrsc3[3]."<br>";
                  }
                }
                 $csc4="select cat7,g_name from nother where g_name='$r[6]';";
                   $ccsc4= mysqli_query($con,$csc4) or die(mysqli_error($con));
                   $cccsc4=mysqli_fetch_row($ccsc4);
                    //$aa=$ccc[0];
                  $qqsc4="select g_name,cat7.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat7,cands,academic,pinfo where g_name='$r[6]' and cat7.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccsc2[0],$cccsc4[0];";
                  $rrsc4= mysqli_query($con,$qqsc4) or die(mysqli_error($con));
                  while($rrrsc4=mysqli_fetch_row($rrsc4))
                  {
                  if($rrrsc4[1] == $r[1])
                  {
                   
                  echo $rrrsc4[1]." "; 
                  echo $rrrsc4[4]." ";
                  echo $rrrsc4[2]." ";
                  echo $rrrsc4[5]." ";
                  echo $rrrsc4[6]." ";
                  echo $rrrsc4[3]."<br>";
                  
                  }
                }

                 $cse3="select cat8,g_name from nvck where g_name='$r[6]';";
                   $ccse3 = mysqli_query($con,$cse3) or die(mysqli_error($con));
                   $cccse3=mysqli_fetch_row($ccse3);
                    //$aa=$ccc[0];
                  $qqse3="select g_name,cat8.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat8,cands,academic,pinfo where g_name='$r[6]' and cat8.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccse[0],$cccse3[0];";
                  $rrse3 = mysqli_query($con,$qqse3) or die(mysqli_error($con));
                  while($rrrse3=mysqli_fetch_row($rrse3))
                  {
                  if($rrrse3[1] == $r[1])
                  {
                   echo $rrrse3[1]." "; 
                  echo $rrrse3[4]." ";
                  echo $rrrse3[2]." ";
                  echo $rrrse3[5]." ";
                  echo $rrrse3[6]." ";
                  echo $rrrse3[3]."<br>";
                  }
                }
                 $cse4="select cat8,g_name from nother where g_name='$r[6]';";
                   $ccse4= mysqli_query($con,$cse4) or die(mysqli_error($con));
                   $cccse4=mysqli_fetch_row($ccse4);
                    //$aa=$ccc[0];
                  $qqse4="select g_name,cat8.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat8,cands,academic,pinfo where g_name='$r[6]' and cat8.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccse2[0],$cccse4[0];";
                  $rrse4= mysqli_query($con,$qqse4) or die(mysqli_error($con));
                  while($rrrse4=mysqli_fetch_row($rrse4))
                  {
                  if($rrrse4[1] == $r[1])
                  {
                   
                  echo $rrrse4[1]." "; 
                  echo $rrrse4[4]." ";
                  echo $rrrse4[2]." ";
                  echo $rrrse4[5]." ";
                  echo $rrrse4[6]." ";
                  echo $rrrse4[3]."<br>";
                  
                  }
                }

                 $cst3="select cat9,g_name from nvck where g_name='$r[6]';";
                   $ccst3 = mysqli_query($con,$cst3) or die(mysqli_error($con));
                   $cccst3=mysqli_fetch_row($ccst3);
                    //$aa=$ccc[0];
                  $qqst3="select g_name,cat9.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat9,cands,academic,pinfo where g_name='$r[6]' and cat9.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccst[0],$cccst3[0];";
                  $rrst3 = mysqli_query($con,$qqst3) or die(mysqli_error($con));
                  while($rrrst3=mysqli_fetch_row($rrst3))
                  {
                  if($rrrst3[1] == $r[1])
                  {
                   echo $rrrst3[1]." "; 
                  echo $rrrst3[4]." ";
                  echo $rrrst3[2]." ";
                  echo $rrrst3[5]." ";
                  echo $rrrst3[6]." ";
                  echo $rrrst3[3]."<br>";
                  }
                }
                 $cst4="select cat9,g_name from nother where g_name='$r[6]';";
                   $ccst4= mysqli_query($con,$cst4) or die(mysqli_error($con));
                   $cccst4=mysqli_fetch_row($ccst4);
                    //$aa=$ccc[0];
                  $qqst4="select g_name,cat9.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat9,cands,academic,pinfo where g_name='$r[6]' and cat9.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccst2[0],$cccst4[0];";
                  $rrst4= mysqli_query($con,$qqst4) or die(mysqli_error($con));
                  while($rrrst4=mysqli_fetch_row($rrst4))
                  {
                  if($rrrst4[1] == $r[1])
                  {
                   
                  echo $rrrst4[1]." "; 
                  echo $rrrst4[4]." ";
                  echo $rrrst4[2]." ";
                  echo $rrrst4[5]." ";
                  echo $rrrst4[6]." ";
                  echo $rrrst4[3]."<br>";
                  
                  }
                }

                 $cvj3="select cat10,g_name from nvck where g_name='$r[6]';";
                   $ccvj3 = mysqli_query($con,$cvj3) or die(mysqli_error($con));
                   $cccvj3=mysqli_fetch_row($ccvj3);
                    //$aa=$ccc[0];
                  $qqvj3="select g_name,cat10.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nvck,cat10,cands,academic,pinfo where g_name='$r[6]' and cat10.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Vivekanand College,Kolhapur' limit $cccvj[0],$cccvj3[0];";
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
                 $cvj4="select cat10,g_name from nother where g_name='$r[6]';";
                   $ccvj4= mysqli_query($con,$cvj4) or die(mysqli_error($con));
                   $cccvj4=mysqli_fetch_row($ccvj4);
                    //$aa=$ccc[0];
                  $qqvj4="select g_name,cat10.regino,castcat,clgname, concat(lname,' ',fname,' ',mname) as Name,percentage,subject from nother,cat10,cands,academic,pinfo where g_name='$r[6]' and cat10.regino=cands.regino and academic.r_id = cands.r_id and pinfo.r_id=academic.r_id and clgname='Other' limit $cccvj2[0],$cccvj4[0];";
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



                  $qq2="select *,regino from gvck,cat3 where g_name='$r[6]';";
                  $rr2 = mysqli_query($con,$qq2) or die(mysqli_error($con));
                  while($rrr2=mysqli_fetch_row($rr2))
                  {
                  if($rrr2[12] == $r[1])
                  {
                    
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

