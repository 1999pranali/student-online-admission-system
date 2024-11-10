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

         $ce="select cat1,g_name,subject from gvck,cands where g_name=subject;";
                   $cce = mysqli_query($con,$ce) or die(mysqli_error($con));
                   $ccce=mysqli_fetch_row($cce);
                    //$aa=$ccc[0];
                
        $q="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat1,g_name from pinfo, academic,cands,cat1,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat1.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $ccce[0];";            
          $result = mysqli_query($con,$q) or die(mysqli_error($con));
             while($r=mysqli_fetch_row($result))
             {    
                   echo $r[1]." "; 
                  echo $r[2]." ";
                  echo $r[3]." ";
                  echo $r[4]." ";
                  echo $r[6]." ";
                  echo $r[7]."<br>";
                  
                }

                $ce2="select cat1,g_name,subject from gother,cands where g_name=subject;";
                   $cce2 = mysqli_query($con,$ce2) or die(mysqli_error($con));
                   $ccce2=mysqli_fetch_row($cce2);
                    //$aa=$ccc[0];
                
        $q2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat1,g_name from pinfo, academic,cands,cat1,gother where g_name=subject and edugap='No' and  clgname='Other' and cat1.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $ccce2[0];";            
          $result2 = mysqli_query($con,$q2) or die(mysqli_error($con));
             while($r2=mysqli_fetch_row($result2))
             {    
                   echo $r2[1]." "; 
                  echo $r2[2]." ";
                  echo $r2[3]." ";
                  echo $r2[4]." ";
                  echo $r2[6]." ";
                  echo $r2[7]."<br>";
                  
                }
                 $cn="select cat2,g_name,subject from gvck,cands where g_name=subject;";
                   $ccn = mysqli_query($con,$cn) or die(mysqli_error($con));
                   $cccn=mysqli_fetch_row($ccn);
                    //$aa=$ccc[0];
                
        $qn="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat2,g_name from pinfo, academic,cands,cat2,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat2.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccn[0];";            
          $resultn = mysqli_query($con,$qn) or die(mysqli_error($con));
             while($rn=mysqli_fetch_row($resultn))
             {    
                   echo $rn[1]." "; 
                  echo $rn[2]." ";
                  echo $rn[3]." ";
                  echo $rn[4]." ";
                  echo $rn[6]." ";
                  echo $rn[7]."<br>";
                  
                }

                $cn2="select cat2,g_name,subject from gother,cands where g_name=subject;";
                   $ccn2 = mysqli_query($con,$cn2) or die(mysqli_error($con));
                   $cccn2=mysqli_fetch_row($ccn2);
                    //$aa=$ccc[0];
                
        $qn2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat2,g_name from pinfo, academic,cands,cat2,gother where g_name=subject and edugap='No' and  clgname='Other' and cat2.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccn2[0];";            
          $resultn2 = mysqli_query($con,$qn2) or die(mysqli_error($con));
             while($rn2=mysqli_fetch_row($resultn2))
             {    
                   echo $rn2[1]." "; 
                  echo $rn2[2]." ";
                  echo $rn2[3]." ";
                  echo $rn2[4]." ";
                  echo $rn2[6]." ";
                  echo $rn2[7]."<br>";
                  
                }

                  $cnc="select cat3,g_name,subject from gvck,cands where g_name=subject;";
                   $ccnc = mysqli_query($con,$cnc) or die(mysqli_error($con));
                   $cccnc=mysqli_fetch_row($ccnc);
                    //$aa=$ccc[0];
                
        $qnc="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat3,g_name from pinfo, academic,cands,cat3,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat3.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccnc[0];";            
          $resultnc = mysqli_query($con,$qnc) or die(mysqli_error($con));
             while($rnc=mysqli_fetch_row($resultnc))
             {    
                   echo $rnc[1]." "; 
                  echo $rnc[2]." ";
                  echo $rnc[3]." ";
                  echo $rnc[4]." ";
                  echo $rnc[6]." ";
                  echo $rnc[7]."<br>";
                  
                }

                $cnc2="select cat3,g_name,subject from gother,cands where g_name=subject;";
                   $ccnc2 = mysqli_query($con,$cnc2) or die(mysqli_error($con));
                   $cccnc2=mysqli_fetch_row($ccnc2);
                    //$aa=$ccc[0];
                
        $qnc2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat3,g_name from pinfo, academic,cands,cat3,gother where g_name=subject and edugap='No' and  clgname='Other' and cat3.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccnc2[0];";            
          $resultnc2 = mysqli_query($con,$qnc2) or die(mysqli_error($con));
             while($rnc2=mysqli_fetch_row($resultnc2))
             {    
                   echo $rnc2[1]." "; 
                  echo $rnc2[2]." ";
                  echo $rnc2[3]." ";
                  echo $rnc2[4]." ";
                  echo $rnc2[6]." ";
                  echo $rnc2[7]."<br>";
                  
                }

                  $cnd="select cat4,g_name,subject from gvck,cands where g_name=subject;";
                   $ccnd = mysqli_query($con,$cnd) or die(mysqli_error($con));
                   $cccnd=mysqli_fetch_row($ccnd);
                    //$aa=$ccc[0];
                
        $qnd="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat4,g_name from pinfo, academic,cands,cat4,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat4.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccnd[0];";            
          $resultnd = mysqli_query($con,$qnd) or die(mysqli_error($con));
             while($rnd=mysqli_fetch_row($resultnd))
             {    
                   echo $rnd[1]." "; 
                  echo $rnd[2]." ";
                  echo $rnd[3]." ";
                  echo $rnd[4]." ";
                  echo $rnd[6]." ";
                  echo $rnd[7]."<br>";
                  
                }

                $cnd2="select cat4,g_name,subject from gother,cands where g_name=subject;";
                   $ccnd2 = mysqli_query($con,$cnd2) or die(mysqli_error($con));
                   $cccnd2=mysqli_fetch_row($ccnd2);
                    //$aa=$ccc[0];
                
        $qnd2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat4,g_name from pinfo, academic,cands,cat4,gother where g_name=subject and edugap='No' and  clgname='Other' and cat4.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccnc2[0];";            
          $resultnd2 = mysqli_query($con,$qnd2) or die(mysqli_error($con));
             while($rnd2=mysqli_fetch_row($resultnd2))
             {    
                   echo $rnd2[1]." "; 
                  echo $rnd2[2]." ";
                  echo $rnd2[3]." ";
                  echo $rnd2[4]." ";
                  echo $rnd2[6]." ";
                  echo $rnd2[7]."<br>";
                  
                }
                 
                  $cob="select cat5,g_name,subject from gvck,cands where g_name=subject;";
                   $ccob = mysqli_query($con,$cob) or die(mysqli_error($con));
                   $cccob=mysqli_fetch_row($ccob);
                    //$aa=$ccc[0];
                
        $qob="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat5,g_name from pinfo, academic,cands,cat5,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat5.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccob[0];";            
          $resultob = mysqli_query($con,$qob) or die(mysqli_error($con));
             while($rob=mysqli_fetch_row($resultob))
             {    
                   echo $rob[1]." "; 
                  echo $rob[2]." ";
                  echo $rob[3]." ";
                  echo $rob[4]." ";
                  echo $rob[6]." ";
                  echo $rob[7]."<br>";
                  
                }

                $cob2="select cat5,g_name,subject from gother,cands where g_name=subject;";
                   $ccob2 = mysqli_query($con,$cob2) or die(mysqli_error($con));
                   $cccob2=mysqli_fetch_row($ccob2);
                    //$aa=$ccc[0];
                
        $qob2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat5,g_name from pinfo, academic,cands,cat5,gother where g_name=subject and edugap='No' and  clgname='Other' and cat5.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccob2[0];";            
          $resultob2 = mysqli_query($con,$qob2) or die(mysqli_error($con));
             while($rob2=mysqli_fetch_row($resultob2))
             {    
                   echo $rob2[1]." "; 
                  echo $rob2[2]." ";
                  echo $rob2[3]." ";
                  echo $rob2[4]." ";
                  echo $rob2[6]." ";
                  echo $rob2[7]."<br>";
                  
                } 
                 $cop="select cat6,g_name,subject from gvck,cands where g_name=subject;";
                   $ccop= mysqli_query($con,$cop) or die(mysqli_error($con));
                   $cccop=mysqli_fetch_row($ccop);
                    //$aa=$ccc[0];
                
        $qop="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat6,g_name from pinfo, academic,cands,cat6,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat6.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccop[0];";            
          $resultop = mysqli_query($con,$qop) or die(mysqli_error($con));
             while($rop=mysqli_fetch_row($resultop))
             {    
                   echo $rop[1]." "; 
                  echo $rop[2]." ";
                  echo $rop[3]." ";
                  echo $rop[4]." ";
                  echo $rop[6]." ";
                  echo $rop[7]."<br>";
                  
                }

                $cop2="select cat6,g_name,subject from gother,cands where g_name=subject;";
                   $ccop2 = mysqli_query($con,$cop2) or die(mysqli_error($con));
                   $cccop2=mysqli_fetch_row($ccop2);
                    //$aa=$ccc[0];
                
        $qop2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat6,g_name from pinfo, academic,cands,cat6,gother where g_name=subject and edugap='No' and  clgname='Other' and cat6.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccop2[0];";            
          $resultop2 = mysqli_query($con,$qop2) or die(mysqli_error($con));
             while($rop2=mysqli_fetch_row($resultop2))
             {    
                   echo $rop2[1]." "; 
                  echo $rop2[2]." ";
                  echo $rop2[3]." ";
                  echo $rop2[4]." ";
                  echo $rop2[6]." ";
                  echo $rop2[7]."<br>";
                  
                } 

                $csc="select cat7,g_name,subject from gvck,cands where g_name=subject;";
                   $ccsc= mysqli_query($con,$csc) or die(mysqli_error($con));
                   $cccsc=mysqli_fetch_row($ccsc);
                    //$aa=$ccc[0];
                
        $qsc="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat7,g_name from pinfo, academic,cands,cat7,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat7.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccsc[0];";            
          $resultsc = mysqli_query($con,$qsc) or die(mysqli_error($con));
             while($rsc=mysqli_fetch_row($resultsc))
             {    
                   echo $rsc[1]." "; 
                  echo $rsc[2]." ";
                  echo $rsc[3]." ";
                  echo $rsc[4]." ";
                  echo $rsc[6]." ";
                  echo $rsc[7]."<br>";
                  
                }

                $csc2="select cat7,g_name,subject from gother,cands where g_name=subject;";
                   $ccsc2 = mysqli_query($con,$csc2) or die(mysqli_error($con));
                   $cccsc2=mysqli_fetch_row($ccsc2);
                    //$aa=$ccc[0];
                
        $qsc2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat7,g_name from pinfo, academic,cands,cat7,gother where g_name=subject and edugap='No' and  clgname='Other' and cat7.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccsc2[0];";            
          $resultsc2 = mysqli_query($con,$qsc2) or die(mysqli_error($con));
             while($rsc2=mysqli_fetch_row($resultsc2))
             {    
                   echo $rsc2[1]." "; 
                  echo $rsc2[2]." ";
                  echo $rsc2[3]." ";
                  echo $rsc2[4]." ";
                  echo $rsc2[6]." ";
                  echo $rsc2[7]."<br>";
                  
                } 
                         $cse="select cat8,g_name,subject from gvck,cands where g_name=subject;";
                   $ccse= mysqli_query($con,$cse) or die(mysqli_error($con));
                   $cccse=mysqli_fetch_row($ccse);
                    //$aa=$ccc[0];
                
        $qse="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat8,g_name from pinfo, academic,cands,cat8,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat8.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccse[0];";            
          $resultse = mysqli_query($con,$qse) or die(mysqli_error($con));
             while($rse=mysqli_fetch_row($resultse))
             {    
                   echo $rse[1]." "; 
                  echo $rse[2]." ";
                  echo $rse[3]." ";
                  echo $rse[4]." ";
                  echo $rse[6]." ";
                  echo $rse[7]."<br>";
                  
                }

                $cse2="select cat8,g_name,subject from gother,cands where g_name=subject;";
                   $ccse2 = mysqli_query($con,$cse2) or die(mysqli_error($con));
                   $cccse2=mysqli_fetch_row($ccse2);
                    //$aa=$ccc[0];
                
        $qse2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat8,g_name from pinfo, academic,cands,cat8,gother where g_name=subject and edugap='No' and  clgname='Other' and cat8.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccse2[0];";            
          $resultse2 = mysqli_query($con,$qse2) or die(mysqli_error($con));
             while($rse2=mysqli_fetch_row($resultse2))
             {    
                   echo $rse2[1]." "; 
                  echo $rse2[2]." ";
                  echo $rse2[3]." ";
                  echo $rse2[4]." ";
                  echo $rse2[6]." ";
                  echo $rse2[7]."<br>";
                  
                } 

                 $cst="select cat9,g_name,subject from gvck,cands where g_name=subject;";
                   $ccst= mysqli_query($con,$cst) or die(mysqli_error($con));
                   $cccst=mysqli_fetch_row($ccst);
                    //$aa=$ccc[0];
                
        $qst="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat9,g_name from pinfo, academic,cands,cat9,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat9.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccst[0];";            
          $resultst = mysqli_query($con,$qst) or die(mysqli_error($con));
             while($rst=mysqli_fetch_row($resultst))
             {    
                   echo $rst[1]." "; 
                  echo $rst[2]." ";
                  echo $rst[3]." ";
                  echo $rst[4]." ";
                  echo $rst[6]." ";
                  echo $rst[7]."<br>";
                  
                }

                $cst2="select cat9,g_name,subject from gother,cands where g_name=subject;";
                   $ccst2 = mysqli_query($con,$cst2) or die(mysqli_error($con));
                   $cccst2=mysqli_fetch_row($ccst2);
                    //$aa=$ccc[0];
                
        $qst2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat9,g_name from pinfo, academic,cands,cat9,gother where g_name=subject and edugap='No' and  clgname='Other' and cat9.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccse2[0];";            
          $resultst2 = mysqli_query($con,$qst2) or die(mysqli_error($con));
             while($rst2=mysqli_fetch_row($resultst2))
             {    
                   echo $rst2[1]." "; 
                  echo $rst2[2]." ";
                  echo $rst2[3]." ";
                  echo $rst2[4]." ";
                  echo $rst2[6]." ";
                  echo $rst2[7]."<br>";
                  
                } 

                $cvj="select cat10,g_name,subject from gvck,cands where g_name=subject;";
                   $ccvj= mysqli_query($con,$cvj) or die(mysqli_error($con));
                   $cccvj=mysqli_fetch_row($ccvj);
                    //$aa=$ccc[0];
                
        $qvj="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat10,g_name from pinfo, academic,cands,cat10,gvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat10.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccvj[0];";            
          $resultvj = mysqli_query($con,$qvj) or die(mysqli_error($con));
             while($rvj=mysqli_fetch_row($resultvj))
             {    
                   echo $rvj[1]." "; 
                  echo $rvj[2]." ";
                  echo $rvj[3]." ";
                  echo $rvj[4]." ";
                  echo $rvj[6]." ";
                  echo $rvj[7]."<br>";
                  
                }

                $cvj2="select cat10,g_name,subject from gother,cands where g_name=subject;";
                   $ccvj2 = mysqli_query($con,$cvj2) or die(mysqli_error($con));
                   $cccvj2=mysqli_fetch_row($ccvj2);
                    //$aa=$ccc[0];
                
        $qvj2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat10,g_name from pinfo, academic,cands,cat10,gother where g_name=subject and edugap='No' and  clgname='Other' and cat10.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccvj2[0];";            
          $resultvj2 = mysqli_query($con,$qvj2) or die(mysqli_error($con));
             while($rvj2=mysqli_fetch_row($resultvj2))
             {    
                   echo $rvj2[1]." "; 
                  echo $rvj2[2]." ";
                  echo $rvj2[3]." ";
                  echo $rvj2[4]." ";
                  echo $rvj2[6]." ";
                  echo $rvj2[7]."<br>";
                  
                } 





                 $ce3="select cat1,g_name,subject from nvck,cands where g_name=subject;";
                   $cce3 = mysqli_query($con,$ce) or die(mysqli_error($con));
                   $ccce3=mysqli_fetch_row($cce);
                    //$aa=$ccc[0];
                
        $q3="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat1,g_name from pinfo, academic,cands,cat1,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat1.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $ccce[0] $ccce3[0];";            
          $result3 = mysqli_query($con,$q3) or die(mysqli_error($con));
             while($r3=mysqli_fetch_row($result3))
             {    
                   echo $r3[1]." "; 
                  echo $r3[2]." ";
                  echo $r3[3]." ";
                  echo $r3[4]." ";
                  echo $r3[6]." ";
                  echo $r3[7]."<br>";
                  
                }

                $ce4="select cat1,g_name,subject from nother,cands where g_name=subject;";
                   $cce4 = mysqli_query($con,$ce4) or die(mysqli_error($con));
                   $ccce4=mysqli_fetch_row($cce4);
                    //$aa=$ccc[0];
                
        $q4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat1,g_name from pinfo, academic,cands,cat1,nother where g_name=subject and edugap='No' and  clgname='Other' and cat1.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $ccce2[0] $ccce4[0];";            
          $result4 = mysqli_query($con,$q4) or die(mysqli_error($con));
             while($r4=mysqli_fetch_row($result4))
             {    
                   echo $r4[1]." "; 
                  echo $r4[2]." ";
                  echo $r4[3]." ";
                  echo $r4[4]." ";
                  echo $r4[6]." ";
                  echo $r4[7]."<br>";
                  
                }
                 $cn3="select cat2,g_name,subject from nvck,cands where g_name=subject;";
                   $ccn3 = mysqli_query($con,$cn3) or die(mysqli_error($con));
                   $cccn3=mysqli_fetch_row($ccn3);
                    //$aa=$ccc[0];
                
        $qn3="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat2,g_name from pinfo, academic,cands,cat2,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat2.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccn[0] $cccn3[0];";            
          $resultn3 = mysqli_query($con,$qn3) or die(mysqli_error($con));
             while($rn3=mysqli_fetch_row($resultn3))
             {    
                   echo $rn3[1]." "; 
                  echo $rn3[2]." ";
                  echo $rn3[3]." ";
                  echo $rn3[4]." ";
                  echo $rn3[6]." ";
                  echo $rn3[7]."<br>";
                  
                }

                $cn4="select cat2,g_name,subject from nother,cands where g_name=subject;";
                   $ccn4 = mysqli_query($con,$cn4) or die(mysqli_error($con));
                   $cccn4=mysqli_fetch_row($ccn4);
                    //$aa=$ccc[0];
                
        $qn4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat2,g_name from pinfo, academic,cands,cat2,nother where g_name=subject and edugap='No' and  clgname='Other' and cat2.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccn2[0]  $cccn4[0];";            
          $resultn4 = mysqli_query($con,$qn4) or die(mysqli_error($con));
             while($rn4=mysqli_fetch_row($resultn4))
             {    
                   echo $rn4[1]." "; 
                  echo $rn4[2]." ";
                  echo $rn4[3]." ";
                  echo $rn4[4]." ";
                  echo $rn4[6]." ";
                  echo $rn4[7]."<br>";
                  
                }

                  $cnc3="select cat3,g_name,subject from nvck,cands where g_name=subject;";
                   $ccnc3 = mysqli_query($con,$cnc3) or die(mysqli_error($con));
                   $cccnc3=mysqli_fetch_row($ccnc3);
                    //$aa=$ccc[0];
                
        $qnc3="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat3,g_name from pinfo, academic,cands,cat3,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat3.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccnc[0] $cccnc3[0];";            
          $resultnc3 = mysqli_query($con,$qnc3) or die(mysqli_error($con));
             while($rnc3=mysqli_fetch_row($resultnc3))
             {    
                   echo $rnc3[1]." "; 
                  echo $rnc3[2]." ";
                  echo $rnc3[3]." ";
                  echo $rnc3[4]." ";
                  echo $rnc3[6]." ";
                  echo $rnc3[7]."<br>";
                  
                }

                $cnc4="select cat3,g_name,subject from nother,cands where g_name=subject;";
                   $ccnc4 = mysqli_query($con,$cnc4) or die(mysqli_error($con));
                   $cccnc4=mysqli_fetch_row($ccnc4);
                    //$aa=$ccc[0];
                
        $qnc4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat3,g_name from pinfo, academic,cands,cat3,nother where g_name=subject and edugap='No' and  clgname='Other' and cat3.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccnc2[0] $cccnc4[0];";            
          $resultnc4 = mysqli_query($con,$qnc4) or die(mysqli_error($con));
             while($rnc4=mysqli_fetch_row($resultnc4))
             {    
                   echo $rnc4[1]." "; 
                  echo $rnc4[2]." ";
                  echo $rnc4[3]." ";
                  echo $rnc4[4]." ";
                  echo $rnc4[6]." ";
                  echo $rnc4[7]."<br>";
                  
                }

                  $cnd3="select cat4,g_name,subject from nvck,cands where g_name=subject;";
                   $ccnd3 = mysqli_query($con,$cnd3) or die(mysqli_error($con));
                   $cccnd3=mysqli_fetch_row($ccnd3);
                    //$aa=$ccc[0];
                
        $qnd3="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat4,g_name from pinfo, academic,cands,cat4,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat4.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccnd[0] $cccnd3[0];";            
          $resultnd3 = mysqli_query($con,$qnd3) or die(mysqli_error($con));
             while($rnd3=mysqli_fetch_row($resultnd3))
             {    
                   echo $rnd3[1]." "; 
                  echo $rnd3[2]." ";
                  echo $rnd3[3]." ";
                  echo $rnd3[4]." ";
                  echo $rnd3[6]." ";
                  echo $rnd3[7]."<br>";
                  
                }

                $cnd4="select cat4,g_name,subject from nother,cands where g_name=subject;";
                   $ccnd4 = mysqli_query($con,$cnd4) or die(mysqli_error($con));
                   $cccnd4=mysqli_fetch_row($ccnd4);
                    //$aa=$ccc[0];
                
        $qnd4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat4,g_name from pinfo, academic,cands,cat4,nother where g_name=subject and edugap='No' and  clgname='Other' and cat4.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccnc2[0] $cccnc4[0];";            
          $resultnd4 = mysqli_query($con,$qnd4) or die(mysqli_error($con));
             while($rnd4=mysqli_fetch_row($resultnd4))
             {    
                   echo $rnd4[1]." "; 
                  echo $rnd4[2]." ";
                  echo $rnd4[3]." ";
                  echo $rnd4[4]." ";
                  echo $rnd4[6]." ";
                  echo $rnd4[7]."<br>";
                  
                }
                 
                  $cob2="select cat5,g_name,subject from nvck,cands where g_name=subject;";
                   $ccob2 = mysqli_query($con,$cob2) or die(mysqli_error($con));
                   $cccob2=mysqli_fetch_row($ccob2);
                    //$aa=$ccc[0];
                
        $qob2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat5,g_name from pinfo, academic,cands,cat5,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat5.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccob[0] $cccob2[0];";            
          $resultob2 = mysqli_query($con,$qob2) or die(mysqli_error($con));
             while($rob2=mysqli_fetch_row($resultob2))
             {    
                   echo $rob2[1]." "; 
                  echo $rob2[2]." ";
                  echo $rob2[3]." ";
                  echo $rob2[4]." ";
                  echo $rob2[6]." ";
                  echo $rob2[7]."<br>";
                  
                }

                $cob4="select cat5,g_name,subject from nother,cands where g_name=subject;";
                   $ccob4 = mysqli_query($con,$cob2) or die(mysqli_error($con));
                   $cccob4=mysqli_fetch_row($ccob2);
                    //$aa=$ccc[0];
                
        $qob4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat5,g_name from pinfo, academic,cands,cat5,nother where g_name=subject and edugap='No' and  clgname='Other' and cat5.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccob2[0] $cccob4[0];";            
          $resultob4 = mysqli_query($con,$qob4) or die(mysqli_error($con));
             while($rob4=mysqli_fetch_row($resultob4))
             {    
                   echo $rob4[1]." "; 
                  echo $rob4[2]." ";
                  echo $rob4[3]." ";
                  echo $rob4[4]." ";
                  echo $rob4[6]." ";
                  echo $rob4[7]."<br>";
                  
                } 
                 $cop2="select cat6,g_name,subject from nvck,cands where g_name=subject;";
                   $ccop2= mysqli_query($con,$cop) or die(mysqli_error($con));
                   $cccop2=mysqli_fetch_row($ccop);
                    //$aa=$ccc[0];
                
        $qop2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat6,g_name from pinfo, academic,cands,cat6,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat6.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccop[0] $cccop2[0];";            
          $resultop2 = mysqli_query($con,$qop2) or die(mysqli_error($con));
             while($rop2=mysqli_fetch_row($resultop2))
             {    
                   echo $rop2[1]." "; 
                  echo $rop2[2]." ";
                  echo $rop2[3]." ";
                  echo $rop2[4]." ";
                  echo $rop2[6]." ";
                  echo $rop2[7]."<br>";
                  
                }

                $cop4="select cat6,g_name,subject from nother,cands where g_name=subject;";
                   $ccop4 = mysqli_query($con,$cop4) or die(mysqli_error($con));
                   $cccop4=mysqli_fetch_row($ccop4);
                    //$aa=$ccc[0];
                
        $qop4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat6,g_name from pinfo, academic,cands,cat6,nother where g_name=subject and edugap='No' and  clgname='Other' and cat6.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccop2[0] $cccop4[0];";            
          $resultop4 = mysqli_query($con,$qop4) or die(mysqli_error($con));
             while($rop4=mysqli_fetch_row($resultop4))
             {    
                   echo $rop4[1]." "; 
                  echo $rop4[2]." ";
                  echo $rop4[3]." ";
                  echo $rop4[4]." ";
                  echo $rop4[6]." ";
                  echo $rop4[7]."<br>";
                  
                } 

                $csc2="select cat7,g_name,subject from nvck,cands where g_name=subject;";
                   $ccsc2= mysqli_query($con,$csc2) or die(mysqli_error($con));
                   $cccsc2=mysqli_fetch_row($ccsc2);
                    //$aa=$ccc[0];
                
        $qsc2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat7,g_name from pinfo, academic,cands,cat7,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat7.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccsc[0] $cccsc2[0];";            
          $resultsc2 = mysqli_query($con,$qsc2) or die(mysqli_error($con));
             while($rsc2=mysqli_fetch_row($resultsc2))
             {    
                   echo $rsc2[1]." "; 
                  echo $rsc2[2]." ";
                  echo $rsc2[3]." ";
                  echo $rsc2[4]." ";
                  echo $rsc2[6]." ";
                  echo $rsc2[7]."<br>";
                  
                }

                $csc4="select cat7,g_name,subject from nother,cands where g_name=subject;";
                   $ccsc4= mysqli_query($con,$csc4) or die(mysqli_error($con));
                   $cccsc4=mysqli_fetch_row($ccsc4);
                    //$aa=$ccc[0];
                
        $qsc4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat7,g_name from pinfo, academic,cands,cat7,nother where g_name=subject and edugap='No' and  clgname='Other' and cat7.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccsc2[0] $cccsc4[0];";            
          $resultsc4 = mysqli_query($con,$qsc4) or die(mysqli_error($con));
             while($rsc4=mysqli_fetch_row($resultsc4))
             {    
                   echo $rsc4[1]." "; 
                  echo $rsc4[2]." ";
                  echo $rsc4[3]." ";
                  echo $rsc4[4]." ";
                  echo $rsc4[6]." ";
                  echo $rsc4[7]."<br>";
                  
                } 
                         $cse2="select cat8,g_name,subject from nvck,cands where g_name=subject;";
                   $ccse2= mysqli_query($con,$cse) or die(mysqli_error($con));
                   $cccse2=mysqli_fetch_row($ccse);
                    //$aa=$ccc[0];
                
        $qse2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat8,g_name from pinfo, academic,cands,cat8,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat8.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccse[0] $cccse2[0];";            
          $resultse2 = mysqli_query($con,$qse2) or die(mysqli_error($con));
             while($rse2=mysqli_fetch_row($resultse2))
             {    
                   echo $rse2[1]." "; 
                  echo $rse2[2]." ";
                  echo $rse2[3]." ";
                  echo $rse2[4]." ";
                  echo $rse2[6]." ";
                  echo $rse2[7]."<br>";
                  
                }

                $cse4="select cat8,g_name,subject from nother,cands where g_name=subject;";
                   $ccse4= mysqli_query($con,$cse4) or die(mysqli_error($con));
                   $cccse4=mysqli_fetch_row($ccse4);
                    //$aa=$ccc[0];
                
        $qse4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat8,g_name from pinfo, academic,cands,cat8,nother where g_name=subject and edugap='No' and  clgname='Other' and cat8.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccse2[0] limit $cccse4[0];";            
          $resultse4 = mysqli_query($con,$qse4) or die(mysqli_error($con));
             while($rse4=mysqli_fetch_row($resultse4))
             {    
                   echo $rse4[1]." "; 
                  echo $rse4[2]." ";
                  echo $rse4[3]." ";
                  echo $rse4[4]." ";
                  echo $rse4[6]." ";
                  echo $rse4[7]."<br>";
                  
                } 

                 $cst2="select cat9,g_name,subject from nvck,cands where g_name=subject;";
                   $ccst2= mysqli_query($con,$cst2) or die(mysqli_error($con));
                   $cccst2=mysqli_fetch_row($ccst2);
                    //$aa=$ccc[0];
                
        $qst2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat9,g_name from pinfo, academic,cands,cat9,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat9.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccst[0] $cccst2[0];";            
          $resultst2 = mysqli_query($con,$qst2) or die(mysqli_error($con));
             while($rst2=mysqli_fetch_row($resultst2))
             {    
                   echo $rst2[1]." "; 
                  echo $rst2[2]." ";
                  echo $rst2[3]." ";
                  echo $rst2[4]." ";
                  echo $rst2[6]." ";
                  echo $rst2[7]."<br>";
                  
                }

                $cst4="select cat9,g_name,subject from nother,cands where g_name=subject;";
                   $ccst4 = mysqli_query($con,$cst4) or die(mysqli_error($con));
                   $cccst4=mysqli_fetch_row($ccst4);
                    //$aa=$ccc[0];
                
        $qst4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat9,g_name from pinfo, academic,cands,cat9,nother where g_name=subject and edugap='No' and  clgname='Other' and cat9.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccse2[0] limit $cccse4[0];";            
          $resultst4 = mysqli_query($con,$qst4) or die(mysqli_error($con));
             while($rst4=mysqli_fetch_row($resultst4))
             {    
                   echo $rst4[1]." "; 
                  echo $rst4[2]." ";
                  echo $rst4[3]." ";
                  echo $rst4[4]." ";
                  echo $rst4[6]." ";
                  echo $rst4[7]."<br>";
                  
                } 

                $cvj2="select cat10,g_name,subject from nvck,cands where g_name=subject;";
                   $ccvj2= mysqli_query($con,$cvj2) or die(mysqli_error($con));
                   $cccvj2=mysqli_fetch_row($ccvj2);
                    //$aa=$ccc[0];
                
        $qvj2="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat10,g_name from pinfo, academic,cands,cat10,nvck where g_name=subject and edugap='No' and  clgname='Vivekanand College,Kolhapur' and cat10.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccvj[0] $cccvj2[0];";            
          $resultvj2 = mysqli_query($con,$qvj2) or die(mysqli_error($con));
             while($rvj2=mysqli_fetch_row($resultvj2))
             {    
                   echo $rvj2[1]." "; 
                  echo $rvj2[2]." ";
                  echo $rvj2[3]." ";
                  echo $rvj2[4]." ";
                  echo $rvj2[6]." ";
                  echo $rvj2[7]."<br>";
                  
                }

                $cvj4="select cat10,g_name,subject from nother,cands where g_name=subject;";
                   $ccvj4= mysqli_query($con,$cvj4) or die(mysqli_error($con));
                   $cccvj4=mysqli_fetch_row($ccvj4);
                    //$aa=$ccc[0];
                
        $qvj4="select pinfo.r_id, cands.regino, concat(lname,' ',fname,' ',mname) as Name, castcat, percentage, edugap, subject,clgname,cat10,g_name from pinfo, academic,cands,cat10,nother where g_name=subject and edugap='No' and  clgname='Other' and cat10.regino=cands.regino and pinfo.r_id=academic.r_id and academic.r_id = cands.r_id and cands.regino in(select regino from verify where status='verified') ORDER BY castcat,percentage desc limit $cccvj2[0] $cccvj4[0];";            
          $resultvj4 = mysqli_query($con,$qvj4) or die(mysqli_error($con));
             while($rvj4=mysqli_fetch_row($resultvj4))
             {    
                   echo $rvj4[1]." "; 
                  echo $rvj4[2]." ";
                  echo $rvj4[3]." ";
                  echo $rvj4[4]." ";
                  echo $rvj4[6]." ";
                  echo $rvj4[7]."<br>";
                  
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

