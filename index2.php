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
          <li class="nav-item"><a href="index2.html">Dashboard</a></li>
          <li class="nav-item"><a href="perinfo.php">Personal Info</a></li>
          <li class="nav-item"><a href="">Address</a></li>
          <li class="nav-item"><a href="">Academic Details</a></li>
          <li class="nav-item"><a href="">Course and Subject Details</a></li>
          
      </ul>
    </div>
    </div>
    <div class="col-9">
      <div class="row" style="border-bottom: 1px solid black;">
        <div class="col-8" ><h4>VIVEKANAND COLLEGE,KOLHAPUR(AUTONOMOUS)</h4></div>
        <div class="col-2"><h4> Wel-come <?php session_start(); echo $_SESSION['uname'];?></h4></div>
        <div class="col-2"><h4><img src="image/logout.jpg" width="20%"> Log Out</h4></div>
       </div> 


    </div>
  </div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


      
    