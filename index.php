<?php
  $error="";
$successMessage="";
    if($_POST){
  
      if(!$_POST["email"]){
      $error.="An email address is required.</br>";
      }
      if(!$_POST["subject"]){
      $error.="The subject field is required.</br>";
      }
      if(!$_POST["content"]){
      $error.="The content field is required.</br>";
      }
      if ($_POST['email']&&filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) {
     $error.="The email address is invalid</br>";
}
      if($error !=""){
       $error='<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in form:<br></strong></p>'.$error.'</div>';
      }
      else{
      $emailTo="amitsinghiitro@gmail.com";
        $subject=$_POST['subject'];
        $content=$_POST['content'];
        $headers="From".$_POST['email'];
        if(mail($emailTo,$subject,$content,$headers)){
        $successMessage='<div class="alert alert-success" role="alert">Your Message was sent,we\'ll get back to you ASAP!</div>';
        }
        else{
        $error='<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent -please try again later<br></strong></p></div>';
        }
        
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Gravity Tutorials</title>
    <style type="text/css">
      #carouselExampleInterval{

      }
      h4{
        font-size: 100px;
        font-style:bolder;
        text-decoration-color:rgb(111,111,110);
        margin-top: 200px;
      }
      #card{
        margin-top: 50px;
        
      }
      #footer{
        margin-top: 50px;
        background-color:#D3D3D3;
      }
      #contactPage{
      background-color:#F0F0F0;
      }
    
    </style>
  </head>
  <body>
    <h1 ></h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="#">Gravity</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://amitsinghyadav-com.stackstaging.com/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index4.php">Login</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="signup.html">SignUp</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">View Profile</a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Setting</a>
          <a class="dropdown-item" href="#">Logout</a>
          <a class="dropdown-item" href="#">About Us</a>
        </div>
      </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        QUIZ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Physics</a>
          <a class="dropdown-item" href="#">Chemistry</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Mathematics</a>
          <a class="dropdown-item" href="#">Sample Papers</a>
          <a class="dropdown-item" href="#"></a>
        </div>
      </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REFERENCE BOOKS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Physics</a>
          <a class="dropdown-item" href="#">Chemisrtry</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Mathematics</a>
          <a class="dropdown-item" href="#">Genaral Questions</a>
          <a class="dropdown-item" href="#"></a>
        </div>
      </li>
           
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         DAILY EXERCISES ADVANCED
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Physics</a>
          <a class="dropdown-item" href="#">Chemistry</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Mathematics</a>
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#"></a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="3000">
      <img src="physics.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
          <h2 style="color:green;margin-bottom: 300px;"></h2>
          
        </div>
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="background-image.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h2 style="color:green;margin-bottom: 300px;">Gravity Tutorials changing youth's dream into Reality!</h2>
     </div>
    </div>
    <div class="carousel-item"data-interval="3000">
      <img src="chemistry.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>


<div class="container-fluid" id="card">
 <div class="row">
<div class="col-md-4 col-sm-4">
  <div class="thumbnail">
    <img src="phy.jpg" class="card-img-top" alt="physics">
    <div class="caption">
      <h5>Physics</h5>
      <p><a href="#" class="btn btn-primary">Continue to learn..</a></p>
     
    </div>
  </div>
  
</div>
<div class="col-md-4 col-sm-4">
  <div class="thumbnail">
    <img src="chem.jpg" class="card-img-top" alt="physics">
    <div class="caption">
      <h5>Chemistry</h5>
      <p><a href="#" class="btn btn-primary">Continue to learn..</a></p>
     
    </div>
  </div>
  
</div>

<div class="col-md-4 col-sm-4">
  <div class="thumbnail">
    <img src="math.jpg" class="card-img-top" alt="physics">
    <div class="caption">
      <h5>Mathematics</h5>
      <p><a href="#" class="btn btn-primary">Continue to learn..</a></p>
     
    </div>
  </div>
  
</div>
</div>
</div>
    <div>
      
      
    </div>
   

<div class="container-fluid" id="contactPage">
  <h2 style="text-align: center;">CONTACT US</h2>
  <div class="row">
<div class="col-md-6 col-sm-6">
<div id="error"><? echo $error.$successMessage;?></div>
    <h2 class="col-sm-10">Get In Touch!</h2>

   <form method="post">
    <fieldset class="form-group">
  <div class="col-sm-10">
    <label for="email">Email address</label>
    <input type="email" class="form-control"name="email" id="email" placeholder="Enter your email address">
    <small>We'll never share your email with anyone else.</small>
  </div>
  
  </fieldset>
  <!-- <fieldset class="form-group">
    <div class="col-sm-10">
    <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
      </div>
    </fieldset>
  -->

     <fieldset class="form-group">
   <div class="col-sm-10">
    <label for="subject">Subject</label>
      <input type="text"name="subject" class="form-control" id="subject" placeholder="">
      </div>
 </fieldset>
  <fieldset class="form-group">
    <div class="col-sm-10">
    <label for="content">What do you like to ask from us?</label>
    <textarea class="form-control" name="content" id="content" rows="3"></textarea>
  </div>
</fieldset>
   <fieldset class="form-group">
   <div class="col-sm-10">
   <button type="submit" id="submit"class="btn btn-primary">Submit</button>
   </div>
  </fieldset>
</form>
</div>
<div class="col-md-6 col-sm-6">
   <p>If you have questions about the opportunities available to you in our programs, feel free to send us a message. We will get back to you as soon as possible.</p>
        <h5>Gravity Tutorals</h5>
        <hr>
        <p>Gravity Tutorials,Managing Director : Dr. J.R.Singh Yadav</p>
       <h6>Contact No.:</h6>  
       <p>
        9807766993,831871664 </p>
  <p></p>
      <h5>Hours</h5>  
      <p>
         Monday-Saturday:6:00pm-9pm</p>
  <p> Sunday:Closed</p>
  <p></p>
   <p></p>
   <p></p>
        <hr>
</div>

  </div>
</div>

<footer class="page-footer font-small blue pt-4" id="footer">

 
  <div class="container-fluid text-center text-md-left">

    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">Gravity Tutorials</h5>
        <p>Educating World....</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.linkedin.com/in/amit-singh-yadav-869174170">LinkedIn Profile.</a>
          </li>
          <li>
            <a href="#!">Facabook Page</a>
          </li>
          <li>
            <a href="#!">Twitter</a>
          </li>
          <li>
            <a href="#!"></a>
          </li>
        </ul>

      </div>

      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="weather2.php">Weather</a>
          </li>
          <li>
            <a href="secret.php">Secret Diary</a>
          </li>
          <li>
            <a href="verify.php"> verify</a>
          </li>
          <li>
            <a href="#!"></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2019 Copyright:All right reserved.
    <a href="https://gravitytutorials.com">gravitytutorials.com</a>
  </div>
</footer>

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>