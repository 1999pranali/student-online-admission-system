<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title></title>
   <link rel="stylesheet" href="login.css">
  
   </head>
<body >
  <div style="text-align: center; background-color: white;">

	<img src="image/vi1.jpg" style="height: 6%; width: 6%;"><font style="border-left: 6%; text-align: center;">

  
    <font style="border-left: 5%; text-align: center;margin-top: 0px; font-size: 1.1cm;">
                  <b>VIVEKANAND COLLEGE,KOLHAPUR(AUTONOMOUS)
									</b></font>
</div>
	<div class="rgtn" style="text-align: center; background-color: blue; height: 6%; padding: 10px; width: 100%; font-size: 0.7cm;color: white; margin-top: 6px" >Online Registration</div>



	<div class="form1" >
    
    	<!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="slogin.html" role="tab" aria-controls="home" aria-selected="true" >Student Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="ilogin.html" role="tab" aria-controls="profile" aria-selected="false" >Institute Login</a>
  </li>
 
 </ul><br>
    	 -->
        
        
             <ul><li><a href="slogin.php">Student Login</a></li>
              <li><a href="ilogin.html">Institute Login</a></li>
              
              </ul><br>
           
  
    <form action="savelogin.php" method="POST">
 
      <div>
   <img src="image/a1.png" style="size: 3px; width:6%; height:1%;"> <label>Username:</label>
    <input type="text" class="form" name="username"><br><br>
  </div>
  <div>
    <img src="image/a3.jpg" style="size: 3px; width: 6%; height: 1%"><label> Password:</label>
    <input type="password" class="form" name="password"><br><br>
  </div>
  <div>
    <input type="hidden" name="r_id">
    <button type="button" ><a href="loginregister.php"> Register Now </a></button>
  </div><br>
  <button type="submit" class="button1" name="btnsub">Sign in</button>
</form>
         
</div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
