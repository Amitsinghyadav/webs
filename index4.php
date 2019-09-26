

<?php
/*
//require("config.php");
 $username=$_POST["email"];
 $password=$_POST["password"];
 $username=stripcslashes($username);
 $password=stripcslashes($password);
//$username=mysqli_real_escape_string($username);
//$password=mysqli_real_escape_string($password);
$connection=mysqli_connect("shareddb-q.hosting.stackcp.net:3306
","amitsingh","root1234","usersdetail-3131378d9c") or die($connection);
if (mysqli_connect_error($connection)) {
	die( "there is an error in connecting to database");
	
}
   

 mysqli_select_db($connection,"usersdetail-3131378d9c");
  $result=mysqli_query($connection,"select email,password from users where email='$username' and password='$password'");
  $row=mysqli_fetch_array($result);
  if($row['email']==$username && $row['password']==$password)
  {

$url="welcome.html";
  function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('welcome.html', false);
  }


*/

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
    <style type="text/css">
      .bg{
        background: url();
        width: 100%;
        height: 100%;
      
      }
      #log{
        border:2px solid #909090;
        padding: 60px 40px;
        margin-top: 60px;



      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Gravity</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="http://amitsinghyadav-com.stackstaging.com">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="http://amitsinghyadav-com.stackstaging.com/index4.html">Login</a>
      <a class="nav-item nav-link" href="signup.html">SignUp</a>
      
    </div>
  </div>
</nav>
  
    <div class="container-fluid bg">
      <div class="row">
         <div class="col-md-4 col-sm-4 col-xs-12"></div>
      
        <div class="col-md-4 col-sm-4">
<form id="log" method="POST" action="Login.php">
            <h1 style="text-align: center;">Login</h1>
           <div class="form-group">
          
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" placeholder="email"id="email">
        </div>
         <div class="form-group">
          
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" id="password">
        </div>
         <div class="checkbox">
          
          <label><input type="checkbox" name="checkbox" >Remember me</label>
          
        </div>
        <input type="submit" name="submit" value="Login" class="btn btn-success btn-block">
        <a href="Login.php">Forgot Password?</a>
 </form>

         </div>
        
        
        <div class="col-md-4 col-sm-4">
          
        </div>
      </div>
    </div>
   <footer class="page-footer font-small blue pt-4">

 
  <div class="footer-copyright text-center py-4">© 2019 Copyright:GravityTutorials.com,Inc. or its affliates
  
  </div>
 
</footer>
       



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>